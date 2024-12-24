@extends('frontend.layouts.master')

@section('title', 'Contact')

@section('main')

    <div class="container">

        <div class="row">
            <div class="col-8 mx-auto my-5">


                <!--Alert-->
                <div class="mt-1">
                    @if (@session('success'))
                        <div class="alert alert-success p-2">
                            {{ session('success') }}
                        </div>
                    @endif

                    @if ($errors->any())
                        <div class="alert alert-danger p-2">
                            <ul>
                                @foreach ($errors->all() as $error)
                                    <li>
                                        {{ $error }}
                                    </li>
                                @endforeach
                            </ul>
                        </div>
                    @endif
                </div>

                <form method="POST" action="{{ route('contact-post') }}">
                    @csrf
                    <div class="mb-3">
                        <label class="form-label">Email address</label>
                        <input name="email" type="email" class="form-control" aria-describedby="emailHelp">
                    </div>
                    <div class="mb-3">
                        <label class="form-label">Name</label>
                        <input name="name" type="text" class="form-control" />
                    </div>
                    <div class="mb-3">
                        <label class="form-label">Phone Number</label>
                        <input name="phone" type="text" class="form-control" />
                    </div>
                    <div class="mb-3">
                        <label for="disabledSelect" class="form-label">Konu</label>
                        <select id="disabledSelect" class="form-select" name="topic">
                            <option value="İş Başvurusu">İş Başvurusu</option>
                            <option value="Şikayet">Şikayet</option>
                            <option value="Öneri">Öneri</option>
                        </select>
                    </div>
                    <div class="mb-3">
                        <label for="floatingTextarea2">Message</label>
                        <textarea name="message" class="form-control" id="floatingTextarea2" style="height: 100px"></textarea>
                    </div>
                    <div class="mb-1 form-check">
                    </div>
                    <button type="submit" class="btn btn-primary">Submit</button>
                </form>

            </div>
        </div>
    </div>
@endsection
