<?php

require_once 'config.inc.php';

session_start();
if (!isset($_SESSION['language'])) {
    $_SESSION['language'] = 'fr';
}

header('P3P: CP="NOI ADM DEV PSAi COM NAV OUR OTRo STP IND DEM"');

// Check authentification
function admin() {
    if (isset($_SESSION['userName']) && isset($_SESSION['password']))
        return true;
    else
        return false;
}

// Destroy session
function endAdmin() {
    if (isset($_SESSION['language']))
        $language = $_SESSION['language'];
    session_unset();
    session_destroy();
    session_start();
    $_SESSION['language'] = $language;
}

// Change language
function setLanguage($lang) {
    //session_start();
    $_SESSION['language'] = $lang;
}

// Get projects list
function getProjects() {
    $db = getDB();
    $query = 'SELECT p_id, p_name, p_logo, coun_name_fr AS country'
            .' FROM projects'
            .' INNER JOIN countries ON projects.coun_id = countries.coun_id'
            .' ORDER BY p_name';
    
    $projects = $db->query($query);
    return $projects;
}

// GET PROJECTS BY SECTION
function getProjectsBySection($section) {
    $db = getDB();
    $query = 'SELECT p_id, p_name, p_logo, coun_name_fr AS country'
            .' FROM projects'
            .' INNER JOIN countries ON projects.coun_id = countries.coun_id'
            .' WHERE p_sect=' . $section
            .' OR p_sect=0'
            .' ORDER BY p_name';
    
    $projects = $db->query($query);
    return $projects;
}

// GET n LAST PROJECTS
function getLastProjects($n) {
    $db = getDB();
    $query = 'SELECT p_id, p_name, p_logo, coun_name_fr AS country'
            .' FROM projects'
            .' INNER JOIN countries ON projects.coun_id = countries.coun_id'
            .' ORDER BY p_crea DESC'
            .' LIMIT 0, ' . $n;
    
    $projects = $db->query($query);
    return $projects;
}

// Get current number of projects
function getNbProjects() {
    $db = getDB();
    $query = 'SELECT COUNT(*) AS total FROM projects';
    
    $nbProjects = $db->query($query);
    $nbProjects = $nbProjects->fetch();
    return $nbProjects['total'];
}

// Get current number of contacts
function getNbContacts() {
    $db = getDB();
    $query = 'SELECT COUNT(*) AS total FROM contacts';
    
    $nbContacts = $db->query($query);
    $nbContacts = $nbContacts->fetch();
    return $nbContacts['total'];
}

// Get countries list
function getCountries() {
    $db = getDB();
    $query = 'SELECT coun_id AS id, coun_name_fr AS name'
            .' FROM countries'
            .' ORDER BY name';
    
    $countries = $db->query($query);
    return $countries;
}

// Get themes list
function getThemes() {
    $db = getDB();
    $query = 'SELECT t_id AS id, t_fr AS name'
            .' FROM themes'
            .' ORDER BY name';
    
    $themes = $db->query($query);
    return $themes;
}

// Get project by id
function getProject($project_id) {
    $db = getDB();
    
    // REQUEST FOR CONTACT COUNTRY NAME
    $q1 = '(SELECT c_id, c_first, c_last, c_mail, c_phone, c_street, c_street2, c_city, c_postal, coun_name_fr AS c_country_fr, 
            coun_name_en AS c_country_en, coun_name_es AS c_country_es, contacts.coun_id AS c_coun_id
            FROM contacts
            INNER JOIN countries ON contacts.coun_id = countries.coun_id
           ) AS Q1';
    
    $query = 'SELECT p_id,
                     p_name,
                     coun_name_fr AS country_fr,
                     coun_name_en AS country_en,
                     coun_name_es AS country_es,
                     projects.coun_id AS p_coun_id,
                     p_city,
                     projects.t_id AS t_id,
                     t_fr AS theme_fr,
                     t_en AS theme_en,
                     t_es AS theme_es,
                     p_proj_fr,
                     p_proj_en,
                     p_proj_es,
                     p_summ_fr,
                     p_summ_en,
                     p_summ_es,
                     p_bene_fr,
                     p_bene_en,
                     p_bene_es,
                     p_sect,
                     p_logo,
                     p_pic1,
                     p_pic2,
                     p_pic3,
                     p_vid1,
                     p_vid2,
                     p_vid3,
                     projects.c_id AS c_id,
                     c_first,
                     c_last,
                     c_mail,
                     c_phone,
                     c_street,
                     c_street2,
                     c_city,
                     c_postal,
                     c_country_fr,
                     c_country_en,
                     c_country_es,
                     c_coun_id
              FROM projects
              INNER JOIN countries ON projects.coun_id = countries.coun_id
              INNER JOIN themes ON projects.t_id = themes.t_id
              INNER JOIN ' . $q1 . ' ON projects.c_id = Q1.c_id
              WHERE p_id = ?';
   
    $project = $db->prepare($query);
    
    $project->execute(array($project_id));
    if ($project->rowCount() == 1)
        return $project->fetch();
    else
        throw new Exception("Aucun projet ne correspond à l'identifiant $project_id");
}

// Delete project by id
function deleteProject($project_id) {
    // Get number of projects to check if deleted
    $nbProjectsBefore = getNbProjects();
    
    $db = getDB();
    
    $query = 'DELETE FROM projects WHERE p_id = ?';
    $project = $db->prepare($query);
    
    $project->execute(array($project_id));
    
    // Check if number of projects = -1
    $nbProjectsAfter = getNbProjects();
    
    if (($nbProjectsBefore - $nbProjectsAfter) == 1)
        return true;
    else
        error("Aucun projet ne correspond à l'identifiant $project_id");
}

// Delete contact by id
function deleteContact($contact_id) {
    // Get number of projects to check if deleted
    $nbContactsBefore = getNbContacts();
    
    $db = getDB();
    
    $query = 'DELETE FROM contacts WHERE c_id = ?';
    $contact = $db->prepare($query);
    
    $contact->execute(array($contact_id));
    
    // Check if number of contacts = -1
    $nbContactsAfter = getNbContacts();
    
    if (($nbContactsBefore - $nbContactsAfter) == 1)
        return true;
    else
        error("Aucun contact ne correspond à l'identifiant $contact_id <br> $nbContactsBefore <br> $nbContactsAfter");
}

/* Used to save logo in database
function recordLogo($img_name) {
    $db = getDB();
    $query = 'INSERT INTO logos (logo_path) VALUES (?)';
    $logo = $db->prepare($query);
    
    $logo->execute(array($img_name));
    $logo_id = $db->lastInsertId();
    
    // GOOD RECORD
    if ($logo_id > 0)
        return $logo_id;
    
    // BAD RECORD
    else return -1;
}
*/

// Save project in database
function recordProject($details) {
    $db = getDB();
    $query = 'INSERT INTO projects (p_name,
                                    coun_id, 
                                    p_city, 
                                    t_id,
                                    p_sect,
                                    p_proj_fr,
                                    p_proj_en,
                                    p_proj_es,
                                    p_summ_fr,
                                    p_summ_en,
                                    p_summ_es,
                                    p_bene_fr,
                                    p_bene_en,
                                    p_bene_es,
                                    p_logo,
                                    p_pic1,
                                    p_pic2,
                                    p_pic3,
                                    p_vid1,
                                    p_vid2,
                                    p_vid3,
                                    c_id,
                                    p_crea) 
                            VALUES (?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, NOW())';
    
    $project = $db->prepare($query);
    
    extract($details);
    $project->execute(array($p_name,
                            $coun_id, 
                            $p_city, 
                            $t_id,
                            $p_sect,
                            $p_proj_fr,
                            $p_proj_en,
                            $p_proj_es,
                            $p_summ_fr,
                            $p_summ_en,
                            $p_summ_es,
                            $p_bene_fr,
                            $p_bene_en,
                            $p_bene_es,
                            $p_logo,
                            $p_pic1,
                            $p_pic2,
                            $p_pic3,
                            $p_vid1,
                            $p_vid2,
                            $p_vid3,
                            $c_id
                            ));
    
    $project_id = $db->lastInsertId();
    
    // GOOD RECORD
    if ($project_id > 0)
        return $project_id;
    
    // BAD RECORD
    else return -1;
}

// Save a contact in database
function recordContact($details) {
    $db = getDB();
    $query = 'INSERT INTO contacts (c_first,
                                    c_last,
                                    c_mail,
                                    c_phone,
                                    c_street,
                                    c_street2,
                                    c_city,
                                    c_postal,
                                    coun_id)
                            VALUES (?, ?, ?, ?, ?, ?, ?, ?, ?)';
    
    $new_contact = $db->prepare($query);
    
    extract($details);
    $new_contact->execute(array($c_first,
                                $c_last,
                                $c_mail,
                                $c_phone,
                                $c_street,
                                $c_street2,
                                $c_city,
                                $c_postal,
                                $coun_id
                                ));
    
    $contact_id = $db->lastInsertId();
    
    // GOOD RECORD
    if ($contact_id > 0)
        return $contact_id;
    
    // BAD RECORD
    else return -1;
}

// Update a contact in database
function updateContact($details) {
    $db = getDB();
    $query = 'UPDATE contacts 
                SET c_first     = ?,
                    c_last      = ?,
                    c_mail      = ?,
                    c_phone     = ?,
                    c_street    = ?,
                    c_street2   = ?,
                    c_city      = ?,
                    c_postal    = ?,
                    coun_id     = ?
                WHERE c_id = ?';
    
    $contact = $db->prepare($query);
    
    extract($details);
    return $contact->execute(array( $c_first,
                                    $c_last,
                                    $c_mail,
                                    $c_phone,
                                    $c_street,
                                    $c_street2,
                                    $c_city,
                                    $c_postal,
                                    $coun_id,
                                    $c_id));
}

// Update a project in database
function updateProjectDB($details) {
    $db = getDB();
    $query = 'UPDATE projects
              SET p_name    = ?,
                  coun_id   = ?,
                  p_city    = ?,
                  t_id      = ?,
                  p_sect    = ?,
                  p_proj_fr = ?,
                  p_proj_en = ?,
                  p_proj_es = ?,
                  p_summ_fr = ?,
                  p_summ_en = ?,
                  p_summ_es = ?,
                  p_bene_fr = ?,
                  p_bene_en = ?,
                  p_bene_es = ?,
                  p_logo    = ?,
                  p_pic1    = ?,
                  p_pic2    = ?,
                  p_pic3    = ?,
                  p_vid1    = ?,
                  p_vid2    = ?,
                  p_vid3    = ?
              WHERE p_id = ?';
    
    $project = $db->prepare($query);
    
    extract($details);
    return $project->execute(array( $p_name,
                                    $coun_id,
                                    $p_city, 
                                    $t_id,
                                    $p_sect,
                                    $p_proj_fr,
                                    $p_proj_en,
                                    $p_proj_es,
                                    $p_summ_fr,
                                    $p_summ_en,
                                    $p_summ_es,
                                    $p_bene_fr,
                                    $p_bene_en,
                                    $p_bene_es,
                                    $p_logo,
                                    $p_pic1,
                                    $p_pic2,
                                    $p_pic3,
                                    $p_vid1,
                                    $p_vid2,
                                    $p_vid3,
                                    $p_id
                            ));
}

// Get rid of special characters for img names
function stripAccents($str) {
    return strtr(utf8_decode($str), utf8_decode('àáâãäçèéêëìíîïñòóôõöùúûüýÿÀÁÂÃÄÇÈÉÊËÌÍÎÏÑÒÓÔÕÖÙÚÛÜÝ'),'aaaaaceeeeiiiinooooouuuuyyAAAAACEEEEIIIINOOOOOUUUUY');
}

// Returns json count nb projects by country
function countriesService() {
    $db = getDB();
    $query = 'SELECT COUNT(*) AS total, coun_name_en AS country '
            .'FROM ('
            .'  SELECT coun_name_en '
	        .'  FROM projects AS p '
            .'  INNER JOIN countries AS c ON p.coun_id = c.coun_id '
            .') AS Q1 '
            .'GROUP BY coun_name_en';
    
    $result = $db->query($query);
    $countriesCount = [];
    
    foreach ($result as $country) {
        $countriesCount[$country['country']] = $country['total'];
    }
    
    return $countriesCount;
}

// Returns json location informations by project
function projectsLocationService() {
    $db = getDB();
    $query = 'SELECT coun_name_en AS country, p_city AS city, p_name AS name, p_id AS id '
            .'FROM '
	        .'  projects AS p '
            .'  INNER JOIN countries AS c ON p.coun_id = c.coun_id '
            .'ORDER BY country, city';
    
    $result = $db->query($query);
    $projectsInfo = [];
    
    foreach ($result as $projectInfo) {
        $address = "";
        if (strlen($projectInfo['city']) > 0) {
            $address = $projectInfo['city'] . ', ' ;
        }
        $address = $address . $projectInfo['country'];
        //$projectsInfo[$projectInfo['name']] = [$address, $projectInfo['id']];
        //$projectsInfo[$address][] = [$projectInfo['name'], $projectInfo['id']];
        $projectsInfo[$address][] = array("id" => $projectInfo['id'], "name" => $projectInfo['name']);
    }
    
    return $projectsInfo;
}

?>