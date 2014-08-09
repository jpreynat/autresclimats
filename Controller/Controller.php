<?php

require 'Model/Model.php';

function login() {
    require 'View/Login.php';
}

function logged() {
    require 'View/Logged.php';
}

function home() {
    $nbProjects = getNbProjects();
    require 'View/Home.php';
}

function project($projectId) {
    $project = getProject($projectId);
    require 'View/Project.php';
}

function delete($projectId) {
    $project = getProject($projectId);
    $status = deleteProject($projectId);
    if ($status)
        require 'View/ConfirmDelete.php';
    else
        error('Erreur à la suppression de ' . $project['name']. '.');
}

function edit($projectId) {
    $project = getProject($projectId);
    require 'View/Edit.php';
}

function projectsList() {
    $projects = getProjects();
    require 'View/ProjectsList.php';
}

function newProject() {
    require 'View/NewProject.php';
}

function saveProject() {
    require 'View/SaveProject.php';
}

function updateProject() {
    require 'View/UpdateProject.php';
}

function adminProjects() {
    $projects = getProjects();
    require 'View/AdminProjects.php';
}

function error($errorMsg) {
    require 'View/Error.php';
}

?>