<?php

class Project{
    /**
     * Версия только так показывается иначе ни как
     */
    const VERSION = "0.0.1";

    public function version(): string {
        return static::VERSION;
    }
    public function username(): string {
        return 'ivanov';
    }
    public function age(): int {
        return 33;
    }

}

$project = new Project();
echo $project->version();