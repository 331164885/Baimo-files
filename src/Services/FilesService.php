<?php

namespace Baimo\Files\Services;

use Baimo\Files\Repositories\Interfaces\FilesRepositoryInterface;
use Baimo\Files\Services\Interfaces\FilesServiceInterface;
use Illuminate\Http\Request;

class FilesService implements FilesServiceInterface
{
    protected $filesRepository;

    public function __construct(FilesRepositoryInterface $filesRepository)
    {
        // TODO: Implement serviceIndex() method.
    }

    public function serviceIndex(Request $requestParams): array
    {
        // TODO: Implement serviceIndex() method.
    }

    public function serviceStore(Request $requestParams): bool
    {
        // TODO: Implement serviceStore() method.
    }

    public function serviceUpdate(Request $requestParams): int
    {
        // TODO: Implement serviceUpdate() method.
    }

    public function serviceDestroy(array $requestParams): int
    {
        // TODO: Implement serviceDestroy() method.
    }

    public function serviceShow(Request $requestParams): array
    {
        // TODO: Implement serviceShow() method.
    }

    public function serviceCreate(Request $requestParams): bool
    {
        // TODO: Implement serviceCreate() method.
    }

    public function serviceEdit(Request $requestParams): int
    {
        // TODO: Implement serviceEdit() method.
    }
}