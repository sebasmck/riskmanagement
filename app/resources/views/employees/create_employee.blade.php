<form  action="{{route('employee.store')}}" method="POST">
                    @csrf
                    <div class="form-group row">
                        <div class="col-md-12">
                            <label for="position">Name</label>
                            <input id="name" type="text" class="form-control" name="name" required>
                        </div>
                    </div>
                    <div class="form-group row">
                        <div class="col-md-6">
                            <label for="position">Position</label>
                            <input id="position" type="text" class="form-control" name="position" required>
                        </div>
                        <div class="col-md-6">
                            <label for="position">phone #</label>
                            <input id="phone" type="text" class="form-control" name="phone" required>
                        </div>
                    </div>

                    <div class="form-group row">
                        <div class="col-md-12">
                            <label for="position">E-mail</label>
                            <input id="email" type="text" class="form-control" name="email" required>
                        </div>
                    </div>

                    <div class="form-group row">
                        <div class="col-md-8 offset-md-2">
                            <button type="submit" class="btn btn-primary" style="width: 100%;">
                                {{ __('Guardar') }}
                            </button>
                        </div>
                    </div>
                </form>