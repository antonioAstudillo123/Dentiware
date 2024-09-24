<form>
    <div class="row">
        <div class="col-12 col-lg-6">
            <div class="form-group">
                <label for="calle">Calle</label>
                <input wire:model="calle" type="text" class="form-control" id="calle"  placeholder="Ingresa la calle del paciente">
                <div>@error('calle') <small id="nombreHelp" class="form-text text-danger">{{ $message }}.</small>  @enderror</div>
            </div>
        </div>
        <div class="col-12 col-lg-6">
            <div class="form-group">
                <label for="numero">Número</label>
                <input wire:model="numero" type="text" class="form-control" id="numero"  placeholder="Ingresa el número de la calle">
                <div>@error('numero') <small id="nombreHelp" class="form-text text-danger">{{ $message }}.</small>  @enderror</div>
            </div>
        </div>
    </div>

    <div class="row">
        <div class="col-12 col-lg-6">
            <div class="form-group">
                <label for="colonia">Colonia</label>
                <input wire:model="colonia" type="text" class="form-control" id="colonia" placeholder="Ingresa la colonia del paciente">
                <div>@error('colonia') <small id="nombreHelp" class="form-text text-danger">{{ $message }}.</small>  @enderror</div>
            </div>
        </div>


        <div class="col-12 col-lg-6">
            <div class="form-group">
                <label for="ciudad">Ciudad</label>
                <input wire:model="ciudad" type="text" class="form-control" id="ciudad" placeholder="Ingresa la ciudad del paciente">
                <div>@error('ciudad') <small id="nombreHelp" class="form-text text-danger">{{ $message }}.</small>  @enderror</div>
            </div>
        </div>
    </div>


    <div class="row">
        <div class="col-12 col-lg-6">
            <div class="form-group">
                <label for="estado">Estado</label>
                <input wire:model="estado" type="text" class="form-control" id="estado" placeholder="Ingresa el estado  del paciente">
                <div>@error('estado') <small id="nombreHelp" class="form-text text-danger">{{ $message }}.</small>  @enderror</div>
            </div>
        </div>
        <div class="col-12 col-lg-6">
            <div class="form-group">
                <label for="codigoPostal">Código postal</label>
                <input wire:model="codigoPostal" type="number" class="form-control" id="codigoPostal"  placeholder="Ingresa el código postal">
                <div>@error('codigoPostal') <small id="nombreHelp" class="form-text text-danger">{{ $message }}.</small>  @enderror</div>
            </div>
        </div>
    </div>


    <div class="row">
        <div class="col-12 col-lg-12">
            <div class="form-group">
                <label for="pais">País</label>
                <select wire:model="pais" class="form-control" id="pais" aria-label="">
                    <option disabled value="" selected>-- Elige una opción --</option>
                    <option value="México">México</option>
                    <option value="España">España</option>
                    <option value="Colombia">Colombia</option>
                    <option value="Argentina">Argentina</option>
                    <option value="Chile">Chile</option>
                    <option value="Venezuela">Venezuela</option>
                    <option value="EEUU">EEUU</option>
                    <option value="Canada">Canada</option>
                    <option value="El Salvador">El Salvador</option>
                    <option value="Bolivia">Bolivia</option>
                </select>
                <div>@error('pais') <small id="nombreHelp" class="form-text text-danger">{{ $message }}.</small>  @enderror</div>
            </div>
        </div>
    </div>



    <div class="row">
        <div class="col-12 col-lg-12">
            <div class="mb-3">
                <label for="referencias" class="form-label">Referencias</label>
                <textarea wire:model="referencias" class="form-control" style="resize: none;" id="referencias" rows="3" placeholder="Ingresa referencias adicionales"></textarea>
                <div>@error('referencias') <small id="nombreHelp" class="form-text text-danger">{{ $message }}.</small>  @enderror</div>
            </div>
        </div>
    </div>


</form>
