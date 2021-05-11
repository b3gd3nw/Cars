<form id="form" method="POST" action="{{ route('car.store') }}" enctype="multipart/form-data" novalidate>
    @csrf
    @method('POST')
    <div class="field">
        <label class="label">Make</label>
        <div class="control">
            <input required name="make" class="input" type="text" require notnum max20>
            <span class="error red fs-12"></span>
        </div>
    </div>
    <div class="field">
        <label class="label">Model</label>
        <div class="control">
            <input name="model" class="input" type="text" id="budget" max6>
            <span class="error red fs-12"></span>
        </div>
    </div>
    <div class="field">
        <label class="label">Produced On</label>
        <div class="control">
            <input name="produced_on" class="input" type="text" id="budget" max6>
            <span class="error red fs-12"></span>
        </div>
    </div>
    <div class="field">
        <button type="submit" class="button is-success" id="submit">Save changes</button>
    </div>
</form>
