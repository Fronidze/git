<?php

class Project{
    const VERSION = "0.0.1";

    public function version(): string {
        return static::VERSION;
    }

}

$project = new Project();
echo $project->version();