---
title: About
description: A little bit about the site
---
@extends('_layouts.master')

@section('body')
    <h1>Projects</h1>
    <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3">
        @foreach($projects as $key=> $project)
            <x-project
                    :project="$project"
            />
        @endforeach
    </div>
@endsection
