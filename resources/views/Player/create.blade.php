@extends('layout')

@section('content')

    <section class="ftco-section" id="inputs">
        <div class="container" style="margin-top: 75px">
            <div class="row align-items-baseline">
                <div class="col-md-12">
                    <h2 class="heading-section">Add a player</h2>
                </div>
            </div>
            <form class="form-group">
                <div class="row align-items-baseline">
                    <!-- Name Input -->
                    <div class="col-md-6">
                        <div class="form-group has-default">
                            <label for="name">Name</label>
                            <input
                                class="form-control"
                                type="text"
                                name="name"
                                id="name"
                                placeholder="Name"
                                value="{{ old('name') }}">

                            @error('name')
                            <p class="help is-danger">{{ $errors->first('name') }}</p>
                            @enderror
                        </div>
                    </div>

                    <!-- Surname Input -->
                    <div class="col-md-6">
                        <div class="form-group has-default">
                            <label for="surname">Surname</label><input
                                class="form-control"
                                type="text"
                                name="surname"
                                id="surname"
                                placeholder="Surname"
                                value="{{ old('surname') }}">

                            @error('surname')
                            <p class="help is-danger">{{ $errors->first('surname') }}</p>
                            @enderror
                        </div>
                    </div>

                    <!-- Pseudo Input -->
                    <div class="col-md-9">
                        <div class="form-group has-default">
                            <label for="pseudo">Pseudo</label><input
                                class="form-control"
                                type="text"
                                name="pseudo"
                                id="pseudo"
                                placeholder="Pseudo"
                                value="{{ old('pseudo') }}">

                            @error('pseudo')
                            <p class="help is-danger">{{ $errors->first('pseudo') }}</p>
                            @enderror
                        </div>
                    </div>

                    <!-- Role Input -->
                    <div class="col-md-9">
                        <div class="form-group has-default">
                            <label for="pseudo">Role</label><input
                                class="form-control"
                                type="text"
                                name="role"
                                id="role"
                                placeholder="Role"
                                value="{{ old('role') }}">

                            @error('role')
                            <p class="help is-danger">{{ $errors->first('role') }}</p>
                            @enderror
                        </div>
                    </div>

                    <!-- Excerpt Input -->
                    <div class="col-md-9">
                        <div class="form-group has-default">
                            <label for="pseudo">Excerpt</label><input
                                class="form-control"
                                type="text"
                                name="excerpt"
                                id="excerpt"
                                placeholder="Excerpt"
                                value="{{ old('excerpt') }}">

                            @error('excerpt')
                            <p class="help is-danger">{{ $errors->first('excerpt') }}</p>
                            @enderror
                        </div>
                    </div>

                    <!-- Text Input -->
                    <div class="col-md-9">
                        <div class="form-group has-default">
                            <label for="pseudo">Pseudo</label><input
                                class="form-control"
                                type="text"
                                name="pseudo"
                                id="pseudo"
                                placeholder="Pseudo"
                                value="{{ old('pseudo') }}">

                            @error('name')
                            <p class="help is-danger">{{ $errors->first('pseudo') }}</p>
                            @enderror
                        </div>
                    </div>

                    <!-- Arrival Input -->
                    <div class="w-100">
                        <h2 class="heading-section">
                            <small>Datetimepickers</small>
                        </h2>
                        <div class="w-100">
                            <form action="" method="post" class="datepickers">
                                <div class="form-group">
                                    <!-- <label class="label-control" for="id_start_datetime">Datetime picker</label> -->
                                    <div class="input-group date" id="id_0">
                                        <input type="text" value="10/01/2019 05:32:00 PM" class="form-control" required/>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </form>
            <!--
                <div class="col-md-3">
                    <div class="form-group has-success">
                        <input type="text" class="form-control" id="exampleInput2" placeholder="Success" required>
                        <span class="icon success">
                <i class="ion-ios-checkmark"></i>
              </span>
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="form-group has-danger">
                        <input type="text" class="form-control" id="exampleInput3" placeholder="Error Input" required>
                        <span class="icon clear">
                <i class="ion-ios-close"></i>
              </span>W>
                    </div>
                </div>
                -->
        </div>
    </section>

@endsection()
