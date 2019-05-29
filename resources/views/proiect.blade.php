@extends('layouts.dashbord')

@section('content')


    <div class="container">
        <div class="row">
            <div class="col-6 mx-auto">
                <div class="card shadow mb-4">
                    <div class="card-header py-3">
                        <h6 class="m-0 font-weight-bold text-primary">Detalii proiect</h6>
                    </div>
                    <div class="card-body">
                        <div class="input-group mb-3">
                            <div class="input-group-prepend">
                                <span class="input-group-text">Nume proiect</span>
                            </div>
                            <input class="form-control" type="text" placeholder="{{ $proiect->nume }}" readonly>
                        </div>
                        <div class="input-group mb-3">
                            <div class="input-group-prepend">
                                <span class="input-group-text">Email</span>
                            </div>
                            <input class="form-control" type="text" placeholder="{{ $proiect->email }}" readonly>
                        </div>
                        <div class="input-group mb-3">
                            <div class="input-group-prepend">
                                <span class="input-group-text">Clasa</span>
                            </div>
                            <input class="form-control" type="text" placeholder="{{ $proiect->clasa }}" readonly>
                        </div>
                        <div class="input-group mb-3">
                            <div class="input-group-prepend">
                                <span class="input-group-text">Sectiune</span>
                            </div>
                            <input class="form-control" type="text" placeholder="{{ $proiect->sectiune->nume }}"
                                   readonly>
                        </div>
                        <div class="input-group mb-3">
                            <div class="input-group-prepend">
                                <span class="input-group-text">Scoala</span>
                            </div>
                            <input class="form-control" type="text" placeholder="{{ $proiect->scoala }}" readonly>
                        </div>
                        <div class="input-group mb-3">
                            <div class="input-group-prepend">
                                <span class="input-group-text">Nume profesor</span>
                            </div>
                            <input class="form-control" type="text" placeholder="{{ $proiect->prof_nume }}" readonly>
                        </div>
                        <div class="input-group mb-3">
                            <div class="input-group-prepend">
                                <span class="input-group-text">Materie profesor</span>
                            </div>
                            <input class="form-control" type="text" placeholder="{{ $proiect->prof_materie }}" readonly>
                        </div>
                        <div class="input-group mb-3">
                            <div class="input-group-prepend">
                                <span class="input-group-text">Descriere</span>
                            </div>
                            <textarea class="form-control" type="text" placeholder="{{ $proiect->descriere }}"
                                      readonly></textarea>
                        </div>
                        <div class="input-group mb-3">
                            <div class="input-group-prepend">
                                <span class="input-group-text">URL</span>
                            </div>
                            <input class="form-control" type="text" placeholder="{{ $proiect->url }}" readonly>
                            <div class="input-group-append">
                                <a class="btn btn-outline-secondary" href="{{ $proiect->url }}">Acceseaza</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-4 mx-auto">
                <div class="container">
                    <div class="row">
                        <div class="card shadow mb-4">
                            <div class="card-header py-3">
                                <h6 class="m-0 font-weight-bold text-primary">Actiuni</h6>
                            </div>
                            <form method="post" action="{{ route('admin.punctaj', ['id' => $proiect->id]) }}">
                                {{ csrf_field() }}
                            <div class="card-body">
                                <div class="row">
                                    <div class="input-group mb-3">
                                        <div class="input-group-prepend">
                                            <span class="input-group-text">Punctaj</span>
                                        </div>

                                        <input type="text" class="form-control" name="punctaj"
                                               value="{{ $proiect->punctaj }}">

                                    </div>
                                </div>
                                <div class="row">
                                    <div class="input-group mb-3">
                                        <div class="input-group-prepend">
                                            <span class="input-group-text">Premiu</span>
                                        </div>

                                        <select name="premiu" value="{{ $proiect->premiu }}">
                                            <option value="0">

                                                @if ($proiect->premiu == 0)
                                                    Nimic
                                                @endif

                                                @if ($proiect->premiu == 1)
                                                    Premiul I
                                                @endif
                                                
                                                @if ($proiect->premiu == 2)
                                                    Premiul II
                                                @endif

                                                @if ($proiect->premiu == 3)
                                                    Premiul III
                                                @endif

                                                @if ($proiect->premiu == 4)
                                                    Mentiune
                                                @endif
                                            
                                            </option>

                                            @if ($proiect->premiu != 1)
                                                <option value="1">Premiul I</option>
                                            @endif

                                            @if ($proiect->premiu != 2)
                                                <option value="2">Premiul II</option>
                                            @endif

                                            @if ($proiect->premiu != 3)
                                                <option value="3">Premiul III</option>
                                            @endif

                                            @if ($proiect->premiu != 4)
                                                <option value="4">Mentiune</option>
                                            @endif
                                              
                                        </select>

                                    </div>
                                </div>
                                <div class="row">
                                    <button class="btn btn-primary btn-block" type="submit">Salveaza</button>
                                    <a href="{{ route('admin.verifica', ['id' => $proiect->id]) }}" class="btn btn-primary btn-block">Verifica</a>
                                    <a href="{{ route('admin.descalifica', ['id' => $proiect->id]) }}" class="btn btn-danger btn-block">Descalifica</a>
                                </div>
                            </div>
                            </form>
                        </div>
                    </div>
                    <div class="row">
                        <div class="card shadow mb-4">
                            <div class="card-header py-3">
                                <h6 class="m-0 font-weight-bold text-primary">Elevi</h6>
                            </div>
                            <div class="card-body">
                                <div class="input-group mb-3">
                                    <div class="input-group-prepend">
                                        <span class="input-group-text">Elev 1</span>
                                    </div>
                                    <input class="form-control" type="text" placeholder="{{ $proiect->elev_one }}"
                                           readonly>
                                </div>
                                <div class="input-group mb-3">
                                    <div class="input-group-prepend">
                                        <span class="input-group-text">Elev 2</span>
                                    </div>
                                    <input class="form-control" type="text" placeholder="{{ $proiect->elev_two }}"
                                           readonly>
                                </div>
                                <div class="input-group mb-3">
                                    <div class="input-group-prepend">
                                        <span class="input-group-text">Elev 3</span>
                                    </div>
                                    <input class="form-control" type="text" placeholder="{{ $proiect->elev_three }}"
                                           readonly>
                                </div>
                                <div class="input-group mb-3">
                                    <div class="input-group-prepend">
                                        <span class="input-group-text">Elev 4</span>
                                    </div>
                                    <input class="form-control" type="text" placeholder="{{ $proiect->elev_four }}"
                                           readonly>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>




@endsection
