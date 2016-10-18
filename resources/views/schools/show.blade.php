@extends('layouts.master')

@section('school')
    <div style="background:url('{{ $school->banner }}') no-repeat center top;"></div>
    <div class="container">
        <div class="page-header">
            <h3>{{ $school->name }}</h3>
            <img class="flag" src="{{ $flagPath->flag }}" alt="{{ $flagPath->name }}">
        </div>
        <div class="row">
            <div class="col-md-6">
                <article>
                    <section>
                        <a>Сургуулийн зэрэглэл: {{ $school->rank }}</a>
                        <p>{!! $school->description !!}</p>
                    </section>
                </article>
            </div>
            <div class="col-md-6">
                {!! $school->media !!}
            </div>
        </div>
    </div>
    <div class="container space">
        {!! $school->file !!}
    </div>
    <div class="space"></div>

@stop