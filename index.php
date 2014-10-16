<?php

require 'Controller/Controller.php';

try {
    if (isset($_GET['action'])) {
        switch($_GET['action']):
        
            // PROJECT DESCRIPTION
            case 'project':
                if (isset($_GET['id'])) {
                    $projectId = intval($_GET['id']);
                    if ($projectId != 0)
                        project($projectId);
                    else
                        throw new Exception("Identifiant de projet invalide.");
                }
                else
                    throw new Exception("Identifiant de projet non transmis.");
                break;
        
            // LIST OF PROJECTS
            case 'projectsList':
                if (isset($_GET['section'])) {
                    projectsList(intval($_GET['section']));
                }
                // IF NO SPECIFIC SECTION
                else {
                    projectsList(0);
                }
                break;
        
            // CREATE NEW PROJECT
            case 'newProject':
                if (admin())
                    newProject();
                else
                    logged();
                break;
        
            // SAVE NEW PROJECT
            case 'saveProject':
                if (admin())
                    saveProject();
                else
                    logged();
                break;
            
            // UPDATE PROJECT
            case 'updateProject':
                if (admin())
                    updateProject();
                else
                    logged();
                break;
        
            // ADMIN ALL PROJECTS
            case 'adminProjects':
                if (admin())
                    adminProjects();
                else
                    logged();
                break;
        
            // DELETE A PROJECT
            case 'delete':
                if (admin()) {
                    if (isset($_GET['id'])) {
                        $projectId = intval($_GET['id']);
                        if ($projectId != 0)
                            delete($projectId);
                        else
                            throw new Exception("Identifiant de projet invalide.");
                    }
                    else
                        throw new Exception("Identifiant de projet non transmis.");
                }
                else
                    logged();
                break;
                
            // EDIT A PROJECT
            case 'edit':
                if (admin()) {
                    if (isset($_GET['id'])) {
                        $projectId = intval($_GET['id']);
                        if ($projectId != 0)
                            edit($projectId);
                        else
                            throw new Exception("Identifiant de projet invalide.");
                    }
                    else
                        throw new Exception("Identifiant de projet non transmis.");
                }
                else
                    logged();
                break;
        
            // LOGIN PAGE
            case 'login':
                login();
                break;
        
            case 'logout':
                if (admin())
                // END SESSION
                    endAdmin();
                // GO TO HOME ANYWAY
                home();
                break;
        
            case 'logged':
                logged();
                break;
            
            case 'about':
                about();
                break;
                
            case 'contact':
                contact();
                break;
                
            // SET LANGUAGE
            case 'setLang':
                if (isset($_GET['lang'])) {
                    $newLang = $_GET['lang'];
                    if ($newLang === 'fr' || $newLang === 'en' || $newLang === 'es')
                        setLang($newLang);
                    else
                        throw new Exception("Langue inconnue.");
                }
                else
                    throw new Exception("Langue non transmise.");
                break;
            
            default:
                throw new Exception("Action invalide.");
        
        endswitch;
    }
    
    else // IF NO ACTION, GO TO HOME
        home();
}

// SHOULDN'T HAPPEN...
catch (Exception $e) {
    error($e->getMessage());
}

?>