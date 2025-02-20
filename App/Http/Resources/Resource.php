<?php

namespace App\Http\Resources;

use CloudCastle\Core\Api\Resources\AbstractResource;
use CloudCastle\Core\Api\Router\Router;
use stdClass;

abstract class Resource extends AbstractResource
{
    public function __construct (array|object|null $data = null)
    {
        parent::__construct($data);
    }
    
    protected function getLinks(
        string|int|null $id = null,
        array $list = [
            'view', 'update', 'delete_soft', 'delete_hard', 'restore'
        ]
    ): stdClass
    {
        $data = [];
        if(!$id){
            $id = $this->id??null;
        }
        
        foreach ($list as $action) {
            $data[$action] = $this->getLink($id, $action);
        }
        
        return (object)$data;
    }
    
    private function getLink (int|string $id, string $action): stdClass
    {
        $link = new stdClass();
        [$method, $url] = $this->getMethod($action);
        $permissionKey = $method . str_replace(['{', '}', '/'], ['', '', '.'], '/'.trim($this->path, '/'));
        
        $link->url = $url;
        $link->title = trans("routes.$permissionKey", [':id' => $id, ':action' => $action]);
            
        foreach ($this as $key => $value) {
            if($value){
                $link->url = str_replace('{'.$key.'}', $value, $link->url);
            }
        }
            
        $link->url = $this->prefixUrl.str_replace('{id}', $id, $link->url);
        $link->method = mb_strtoupper($method);
        $link->permissionKey = $permissionKey;
        
        return $link;
    }
    
    private function getMethod (string $action): array
    {
        return match ($action) {
            'view' => [
                'get',
                $this->path,
            ],
            'create' => [
                'post',
                $this->path,
            ],
            'update' => [
                'patch',
                $this->path,
            ],
            'restore' => [
                'put',
                $this->path,
            ],
            'delete_soft' => [
                'delete',
                str_replace('{id}', "soft/{id}", $this->path)
            ],
            'delete_hard' => [
                'delete',
                str_replace('{id}', "hard/{id}", $this->path)
            ],
        };
    }
}