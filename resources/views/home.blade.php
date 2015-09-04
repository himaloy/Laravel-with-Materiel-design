@extends('layouts.master')

@section('content')
    <div class="row">
    <div class="text-center">
        <h1>Welcome to Laravel-with-Materiel-Design Boilerplate</h1>
        <hr/>
        <p>Floating action buttons</p>
		<a href="javascript:void(0)" class="btn btn-default btn-fab btn-raised mdi-action-grade"></a>
		<a href="javascript:void(0)" class="btn btn-primary btn-fab btn-raised mdi-action-grade"></a>
		<a href="javascript:void(0)" class="btn btn-success btn-fab btn-raised mdi-action-grade"></a>
		<a href="javascript:void(0)" class="btn btn-info btn-fab btn-raised mdi-action-grade"></a>
		<a href="javascript:void(0)" class="btn btn-warning btn-fab btn-raised mdi-action-grade"></a>
		<a href="javascript:void(0)" class="btn btn-danger btn-fab btn-raised mdi-action-grade"></a>

		<form class="form-horizontal">
    <fieldset>
        <legend>Legend</legend>
        <div class="form-group">
            <label for="inputEmail" class="col-lg-2 control-label">Email</label>
            <div class="col-lg-10">
                <input type="email" class="form-control floating-label" id="inputEmail" placeholder="Email">
            </div>
        </div>
        <div class="form-group">
            <label for="inputPassword" class="col-lg-2 control-label">Password</label>
            <div class="col-lg-10">
                <input type="password" class="form-control floating-label" id="inputPassword" placeholder="Password">
                <div class="checkbox">
                    <label>
                        <input type="checkbox"> Checkbox
                    </label>
                </div>
                <br>
                <div class="togglebutton">
                    <label>
                        <input type="checkbox" checked=""> Toggle button
                    </label>
                </div>
            </div>
        </div>

        <div class="form-group">
            <label for="inputFile" class="col-lg-2 control-label">File</label>
            <div class="col-lg-10">
                <input type="text" readonly="" class="form-control floating-label" placeholder="Browse...">
                <input type="file" id="inputFile" multiple="">
            </div>
        </div>
        <div class="form-group">
            <label for="textArea" class="col-lg-2 control-label">Textarea</label>
            <div class="col-lg-10">
                <textarea class="form-control" rows="3" id="textArea"></textarea>
                <span class="help-block">A longer block of help text that breaks onto a new line and may extend beyond one line.</span>
            </div>
        </div>
        <div class="form-group">
            <label class="col-lg-2 control-label">Radios</label>
            <div class="col-lg-10">
                <div class="radio radio-primary">
                    <label>
                        <input type="radio" name="optionsRadios" id="optionsRadios1" value="option1" checked="">
                        Option one is this
                    </label>
                </div>
                <div class="radio radio-primary">
                    <label>
                        <input type="radio" name="optionsRadios" id="optionsRadios2" value="option2">
                        Option two can be something else
                    </label>
                </div>
            </div>
        </div>
        <div class="form-group">
            <label for="select" class="col-lg-2 control-label">Selects</label>
            <div class="col-lg-10">
                <select class="form-control" id="select">
                    <option>1</option>
                    <option>2</option>
                    <option>3</option>
                    <option>4</option>
                    <option>5</option>
                </select>
                <br>
                <select multiple="" class="form-control">
                    <option>1</option>
                    <option>2</option>
                    <option>3</option>
                    <option>4</option>
                    <option>5</option>
                </select>
            </div>
        </div>
        <div class="form-group">
            <div class="col-lg-10 col-lg-offset-2">
                <button class="btn btn-default">Cancel</button>
                <button type="submit" class="btn btn-primary">Submit</button>
            </div>
        </div>
    </fieldset>
</form>
        <p>For any query please contact</p>
        <h3>Salim Ahmed</h3>
        <h4><a href="#">salimporadia@gmail.com</a></h4>
    </div>
    </div>
@endsection