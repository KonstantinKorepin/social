@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">Персональные данные</div>

                    @if($errors->any())
                        <div class="alert alert-danger">
                            <ul>
                                @foreach($errors->all() as $error)
                                    <li>{{ $error }}</li>
                                @endforeach
                            </ul>
                        </div>
                    @endif
                    <div class="card-body">
                        <form method="POST" action="{{ route('personal_edit') }}">
                            @csrf

                            <div class="form-group row">
                                <label for="name" class="col-md-4 col-form-label text-md-right">Имя</label>

                                <div class="col-md-6">
                                    <input id="name" type="text" class="form-control" name="name" value="" placeholder="Ваше имя" required autocomplete="on" autofocus>
                                </div>
                            </div>

                            <div class="form-group row">
                                <label for="surname" class="col-md-4 col-form-label text-md-right">Фамилия</label>

                                <div class="col-md-6">
                                    <input id="surname" type="text" class="form-control" name="surname" value="" placeholder="Ваша фамилия" required autocomplete="on" autofocus>
                                </div>
                            </div>

                            <div class="form-group row">
                                <label for="gender" class="col-md-4 col-form-label text-md-right">Пол</label>

                                <div class="col-md-6">
                                    <select id="gender" name="gender" class="form-control">
                                        <option value="male" selected>Мужской</option>
                                        <option value="female">Женский</option>
                                    </select>
                                </div>
                            </div>

                            <div class="form-group row">
                                <label for="maritalStatus" class="col-md-4 col-form-label text-md-right">Семейное положение</label>

                                <div class="col-md-6">
                                    <select id="maritalStatus" name="maritalStatus" class="form-control">
                                        <option value="notMarriedM" selected>Не женат</option>
                                        <option value="marriedM">Женат</option>
                                        <option value="notMarriedF">Не замужем</option>
                                        <option value="marriedF">Замужем</option>
                                    </select>
                                </div>
                            </div>

                            <div class="form-group row">
                                <label class="col-md-4 col-form-label text-md-right" for="edInst">Учебное заведение</label>

                                <div class="col-md-6">
                                    <input id="edInst" type="text" class="form-control" name="edInst" value="" placeholder="Учебное заведение" required autocomplete="on" autofocus>
                                </div>
                            </div>

                            <div class="form-group row">
                                <label for="birthday" class="col-md-4 col-form-label text-md-right">Дата рождения</label>

                                <div class="col-md-6">
                                    <input id="birthday" type="text" class="form-control" name="birthday" value="" placeholder="Дата рождения" required autocomplete="off" autofocus>
                                </div>
                            </div>

                            <div class="form-group row">
                                <label for="status" class="col-md-4 col-form-label text-md-right">Статус</label>

                                <div class="col-md-6">
                                    <input id="status" type="text" class="form-control" name="status" value="" placeholder="Статус" required autocomplete="off" autofocus>
                                </div>
                            </div>

                            <div class="form-group row">
                                <label for="about" class="col-md-4 col-form-label text-md-right">Обо мне</label>

                                <div class="col-md-6">
                                    <textarea id="about" name="about" class="form-control" cols="30" rows="10"></textarea>
                                </div>
                            </div>

                            <div class="form-group row">
                                <label for="avatar" class="col-md-4 col-form-label text-md-right">Аватарка</label>

                                <div class="col-md-6">
                                    <input id="avatar" type="file" class="form-control" name="avatar">
                                </div>
                            </div>

                            <div class="form-group row mb-0">
                                <div class="col-md-6 offset-md-4">
                                    <button type="submit" class="btn btn-primary">
                                        Сохранить
                                    </button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
