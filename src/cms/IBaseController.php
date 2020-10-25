<?php

namespace Cms;

interface IBaseController 
{
    public function index();
    public function show($id);
    public function store($data);
    public function update($data, $id);
    public function delete($id);
}