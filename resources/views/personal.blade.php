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
                        <form method="POST" action="{{ route('personal_edit') }}" enctype="multipart/form-data">
                            @csrf
                            <input id="id" type="hidden" name="id" value="{{ $personals->id }}">

                            <div class="form-group row">
                                <label for="name" class="col-md-4 col-form-label text-md-right">Имя</label>

                                <div class="col-md-6">
                                    <input id="name" type="text" class="form-control" name="name" value="{{ $personals->name }}" placeholder="Ваше имя" autocomplete="on" autofocus>
                                </div>
                            </div>

                            <div class="form-group row">
                                <label for="surname" class="col-md-4 col-form-label text-md-right">Фамилия</label>

                                <div class="col-md-6">
                                    <input id="surname" type="text" class="form-control" name="surname" value="{{ $personals->surname }}" placeholder="Ваша фамилия" autocomplete="on" autofocus>
                                </div>
                            </div>

                            <div class="form-group row">
                                <label for="gender" class="col-md-4 col-form-label text-md-right">Пол</label>

                                <div class="col-md-6">
                                    <select id="gender" name="gender" class="form-control">
                                        <option value="male" @if ($personals->gender === 'male') selected @endif>Мужской</option>
                                        <option value="female" @if ($personals->gender === 'female') selected @endif>Женский</option>
                                    </select>
                                </div>
                            </div>

                            <div class="form-group row">
                                <label for="maritalStatus" class="col-md-4 col-form-label text-md-right">Семейное положение</label>

                                <div class="col-md-6">
                                    <select id="maritalStatus" name="maritalStatus" class="form-control">
                                        <option value="notMarriedM" @if ($personals->maritalStatus === 'notMarriedM') selected @endif>Не женат</option>
                                        <option value="marriedM" @if ($personals->maritalStatus === 'marriedM') selected @endif>Женат</option>
                                        <option value="notMarriedF" @if ($personals->maritalStatus === 'notMarriedF') selected @endif>Не замужем</option>
                                        <option value="marriedF" @if ($personals->maritalStatus === 'marriedF') selected @endif>Замужем</option>
                                    </select>
                                </div>
                            </div>

                            <div class="form-group row">
                                <label class="col-md-4 col-form-label text-md-right" for="edInst">Учебное заведение</label>

                                <div class="col-md-6">
                                    <input id="edInst" type="text" class="form-control" name="edInst" value="{{ $personals->edInst }}" placeholder="Учебное заведение" autocomplete="on" autofocus>
                                </div>
                            </div>

                            <div class="form-group row">
                                <label for="birthday" class="col-md-4 col-form-label text-md-right">Дата рождения</label>

                                <div class="col-md-6">
                                    <input id="birthday" type="text" class="form-control" name="birthday" value="{{ $personals->birthday }}" placeholder="Дата рождения" autocomplete="off" autofocus>
                                </div>
                            </div>

                            <div class="form-group row">
                                <label for="status" class="col-md-4 col-form-label text-md-right">Статус</label>

                                <div class="col-md-6">
                                    <input id="status" type="text" class="form-control" name="status" value="{{ $personals->status }}" placeholder="Статус" autocomplete="off" autofocus>
                                </div>
                            </div>

                            <div class="form-group row">
                                <label for="about" class="col-md-4 col-form-label text-md-right">Обо мне</label>

                                <div class="col-md-6">
                                    <textarea id="about" name="about" class="form-control" cols="30" rows="10">{{ $personals->about }}</textarea>
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
