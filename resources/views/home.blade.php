@extends('layouts.dashbord')

@section('content')


    <div class="container">
        <div class="row">
            <div class="col-6">
                <div class="card shadow mb-4">
                    <form method="post" action="{{ route('participare') }}">
                        {{ csrf_field() }}
                    <div class="card-header py-3">
                        <h6 class="m-0 font-weight-bold text-primary">Selecteaza datele participarii</h6>
                    </div>
                    <div class="card-body text-center">
                        <div class="input-group mb-3">
                            <div class="input-group-prepend">
                                <span class="input-group-text">Inceput</span>
                            </div>
                            <input name="p_start" type="text" class="form-control" value="{{ $participare->start_date }}">
                        </div>

                        <div class="input-group mb-3">
                            <div class="input-group-prepend">
                                <span class="input-group-text">Sfarsit</span>
                            </div>
                            <input name="p_end" type="text" class="form-control" value="{{ $participare->end_date }}">
                        </div>
                        <button type="submit" class="btn btn-primary">Salveaza</button>
                    </div>
                    </form>
                </div>
            </div>

            <div class="col-6">
                <div class="card shadow mb-4">
                    <form method="post" action="{{ route('jurizare') }}">
                        {{ csrf_field() }}
                        <div class="card-header py-3">
                            <h6 class="m-0 font-weight-bold text-primary">Selecteaza datele jurizarii</h6>
                        </div>
                        <div class="card-body text-center">
                            <div class="input-group mb-3">
                                <div class="input-group-prepend">
                                    <span class="input-group-text">Inceput</span>
                                </div>
                                <input name="j_start" type="text" class="form-control" value="{{ $jurizare->start_date }}">
                            </div>

                            <div class="input-group mb-3">
                                <div class="input-group-prepend">
                                    <span class="input-group-text">Sfarsit</span>
                                </div>
                                <input name="j_end" type="text" class="form-control" value="{{ $jurizare->end_date }}">
                            </div>
                            <button type="submit" class="btn btn-primary">Salveaza</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-12">
                <div class="card shadow mb-4">
                    <div class="card-header py-3">
                        <h6 class="m-0 font-weight-bold text-primary">Proiecte</h6>
                    </div>
                    <div class="card-body">
                        <div class="table-responsive">
                            <table class="table table-bordered table-hover" id="dataTable" width="100%" cellspacing="0">
                                <thead>
                                <tr>
                                    <th>Nume</th>
                                    <th>Punctaj</th>
                                    <th>Premiu</th>
                                    <th>Scoala</th>
                                    <th>Actiune</th>
                                </tr>
                                </thead>
                                <tfoot>
                                <tr>
                                    <th>Nume</th>
                                    <th>Punctaj</th>
                                    <th>Premiu</th>
                                    <th>Scoala</th>
                                    <th>Actiune</th>
                                </tr>
                                </tfoot>
                                <tbody>
                                @foreach ($proiecte as $proiect)
                                <tr>
                                  <td>{{ $proiect->nume }}</td>
                                  <td>{{ $proiect->punctaj }}</td>
                                  <td>

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

                                  </td>
                                  <td>{{ $proiect->scoala }}</td>
                                  <td class="text-center">
                                    <a href="{{ route('admin.proiect', ['id' => $proiect->id]) }}" class="btn btn-primary">Vezi</a>
                                    <a href="{{ route('diploma.proiect', ['id' => $proiect->id]) }}" class="btn btn-primary">Diplome</a> 
                                  </td>
                                </tr>
                                    @endforeach
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>




@endsection
