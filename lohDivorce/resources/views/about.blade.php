@extends('layout')

@section('title')
    Кто?
@endsection

@section('body')
    <div class="row flex-lg-row-reverse align-items-center g-5 p-4 p-md-5">
        <div class="col-10 col-sm-8 col-lg-6">
            <img src="https://russian7.ru/wp-content/uploads/2016/09/1-156.jpg" class="d-block mx-lg-auto img-fluid" alt="Кто такой лох" width="700" height="500" loading="lazy">
        </div>
        <div class="col-lg-6">
            <h1 class="display-5 fw-bold text-body-emphasis lh-1 mb-3">Лохи это кто (who)?</h1>
            <p class="lead">
                Лох — в русском и других восточнославянских языках жаргонизм,
                употребляющийся в разговорной речи для обозначения человека,
                не умеющего «устроиться» и приспособиться к изменениям жизни
                и в результате обычно небогатого, а в воровском арго — для
                обозначения жертвы. Антоним слова «крутой»
            </p>
            <div class="d-grid gap-2 d-md-flex justify-content-md-start">
                <button type="button" class="btn btn-primary btn-lg px-4 me-md-2">Я лох</button>
                <button type="button" class="btn btn-outline-secondary btn-lg px-4">Я не лох</button>
            </div>
        </div>
    </div>
@endsection
