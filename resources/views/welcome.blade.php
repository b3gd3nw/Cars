<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Cars</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bulma@0.9.2/css/bulma.min.css">
    <link rel="stylesheet" href="{{ URL::asset('css/app.css') }}">
  </head>
  <body>
  <section class="section">
    <div class="container">
        @if (Session::has('success'))
        <div class="notification is-success">
            <button class="delete"></button>
           {{ session('success') }}
        </div>
        @elseif(Session::has('error'))
            <div class="notification is-warning">
                <button class="delete"></button>
                {{ session('error') }}
               </div>
        @endif
      <div class="columns">
          <div class="column is-full">
            <div class="modal" id="modal">
                <div class="modal-background"></div>
                <div class="modal-card">
                    <header class="modal-card-head">
                        <p class="modal-card-title" id="modal-title">Add New Car</p>
                        <button class="delete" aria-label="close" id="modalClose"></button>
                    </header>
                    <section class="modal-card-body">

                    </section>
                </div>
            </div>
              <h1 class="title has-text-centered">
                  Cars
              </h1>
            <table class="table mg-auto">
                <thead>
                  <tr>
                    <th>Make</th>
                    <th>Model</th>
                    <th>Produced On</th>
                    <th>Actions</th>
                  </tr>
                </thead>
                <tbody>
                  @foreach ($cars as $car)
                  <tr>
                    <th>{{ $car->make }}</th>
                    <th>{{ $car->model }}</th>
                    <th>{{ $car->produced_on }}</th>
                    <td class="is-flex is-justify-content-space-around">
                        <form action="{{ route('car.destroy', $car->id) }}" method="POST">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="button is-danger is-rounded is-small">
                                <i class="fas fa-trash">
                                </i>
                                Delete
                            </button>
                        </form>
                        <button data-path="{{ route('car.edit', $car->id) }}" type="button" class="button is-warning is-rounded is-small edit_car">
                            <i class="fas fa-edit">
                            </i>
                            Edit
                        </button>
                    </td>
                  </tr>
                  @endforeach
                </tbody>
              </table>
          </div>
      </div>
      <div class="columns">
          <div class="column is-full has-text-centered">
            <button data-path="{{ route('car.index') }}" class="button is-primary" id="add_car">Add Car</button>
          </div>
      </div>
    </div>
  </section>
  <script src="{{ URL::asset('./js/app.js') }}"></script>
  </body>
</html>
