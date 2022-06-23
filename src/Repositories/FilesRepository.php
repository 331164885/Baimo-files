<?php

namespace Baimo\Files\Repositories;

use Baimo\Cms\Models\ContentType;
use Baimo\Cms\Models\Menu;
use Baimo\Cms\Repositories\Interfaces\FilesRepositoryInterface;
use Baimo\Cms\Repositories\Interfaces\MenuRepositoryInterface;
use Illuminate\Http\Request;

class FilesRepository implements FilesRepositoryInterface
{

    public function repositoryIndex(\Closure $closure, int $perSize): array
    {
        // TODO: Implement repositoryIndex() method.
    }

    public function repositoryStore(Request $createInfo): int
    {
        // TODO: Implement repositoryStore() method.
    }

    public function repositoryUpdate(Request $updateInfo, array $updateWhere): int
    {
        // TODO: Implement repositoryUpdate() method.
    }

    public function repositoryDestroy(array $deleteWhere): int
    {
        // TODO: Implement repositoryDestroy() method.
    }

    public function repositoryCreate(Request $createInfo): int
    {
        // TODO: Implement repositoryCreate() method.
    }

    public function repositoryShow(\Closure $closure): array
    {
        // TODO: Implement repositoryShow() method.
    }

    public function repositoryEdit(\Closure $closure): array
    {
        // TODO: Implement repositoryEdit() method.
    }
}