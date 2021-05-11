<form id="form" method="POST" action="{{ route('car.update', $car->id) }}" enctype="multipart/form-data" novalidate>
    @csrf
    @method('PUT')
    <div class="field">
        <label class="label">Make</label>
        <div class="control">
            <input required name="make" class="input" type="text" placeholder="Sport" value="{{ $car->make }}" require>
            <span class="error red fs-12"></span>
        </div>
    </div>
    <div class="field">
        <label class="label">Model</label>
        <div class="control">
            <input name="model" class="input" type="text" placeholder="$ 100" id="budget" value="{{ $car->model }}">
            <span class="error red fs-12"></span>
        </div>
    </div>
    <div class="field">
        <label class="label">Produced On</label>
        <div class="control">
            <input name="produced_on" class="input" type="text" placeholder="$ 100" id="budget" value="{{ $car->produced_on }}">
            <span class="error red fs-12"></span>
        </div>
    </div>
    <div class="field">
        <button type="submit" class="button is-success" id="submit">Save changes</button>
    </div>
</form>
