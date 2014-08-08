<?php

require_once 'config.inc.php';

// Check authentification
function admin() {
    if (isset($_SESSION['userName']) && isset($_SESSION['password']))
        return true;
    else
        return false;
}

// Destroy session
function endAdmin() {
    session_unset();
    session_destroy();
}

// Get projects list
function getProjects() {
    $db = getDB();
    $query = 'SELECT p_id, p_name, p_logo, coun_name_fr AS country'
            .' FROM projects'
            .' INNER JOIN countries ON projects.coun_id = countries.coun_id';
    
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
    $q1 = '(SELECT c_id, coun_name_fr AS c_country
            FROM contacts
            INNER JOIN countries ON contacts.coun_id = countries.coun_id
           ) AS Q1';
    
    $query = 'SELECT p_id,
                     p_name,
                     coun_name_fr as country,
                     p_city,
                     t_fr as theme,
                     p_proj_fr as p_proj,
                     p_summ_fr as p_summ,
                     p_bene_fr as p_bene,
                     p_sect,
                     p_logo,
                     p_pic1,
                     p_pic2,
                     p_pic3,
                     p_vid1,
                     p_vid2,
                     p_vid3,
                     c_first,
                     c_last,
                     c_mail,
                     c_phone,
                     c_street,
                     c_city,
                     c_postal,
                     c_country
              FROM projects
              INNER JOIN countries ON projects.coun_id = countries.coun_id
              INNER JOIN {$q1} ON projects.c_id = Q1.c_id';
    
    /*
    $query = 'SELECT proj_id AS id, proj_name AS name, coun_name_fr AS country, proj_language AS language,'
            .' proj_description AS description, logo_path AS img_path, projects.coun_id AS country_id'
            .' FROM projects'
            .' LEFT OUTER JOIN logos ON projects.logo_id = logos.logo_id'
            .' INNER JOIN countries ON projects.coun_id = countries.coun_id'
            .' WHERE proj_id = ?';
    */        
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
    
    $query = 'DELETE FROM projects WHERE proj_id = ?';
    $project = $db->prepare($query);
    
    $project->execute(array($project_id));
    
    // Check if number of projects = -1
    $nbProjectsAfter = getNbProjects();
    
    if (($nbProjectsBefore - $nbProjectsAfter) == 1)
        return true;
    else
        throw new Exception("Aucun projet ne correspond à l'identifiant $project_id");
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
                                    c_id) 
                            VALUES (?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?)';
    
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
                                    c_city,
                                    c_postal,
                                    coun_id)
                            VALUES (?, ?, ?, ?, ?, ?, ?, ?)';
    
    $new_contact = $db->prepare($query);
    
    extract($details);
    $new_contact->execute(array($c_first,
                                $c_last,
                                $c_mail,
                                $c_phone,
                                $c_street,
                                $c_city,
                                $c_postal,
                                $coun_id)
                                );
    
    $contact_id = $db->lastInsertId();
    
    // GOOD RECORD
    if ($contact_id > 0)
        return $contact_id;
    
    // BAD RECORD
    else return -1;
}

// Get rid of special characters for img names
function stripAccents($str) {
    return strtr(utf8_decode($str), utf8_decode('àáâãäçèéêëìíîïñòóôõöùúûüýÿÀÁÂÃÄÇÈÉÊËÌÍÎÏÑÒÓÔÕÖÙÚÛÜÝ'),'aaaaaceeeeiiiinooooouuuuyyAAAAACEEEEIIIINOOOOOUUUUY');
}

?>