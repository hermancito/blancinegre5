<?php

return [

    'formStart' => '<form{{attrs}}>',
    'formEnd' => '</form>',

    'label' => '<label{{attrs}}>{{text}}</label>',

    'inputContainer' => '<div class="form-group {{type}}{{required}}">{{content}}</div>',
    'inputContainerError' => '<div class="form-group {{type}}{{required}} has-error">{{content}}<span class="help-block">{{error}}</span></div>',

    'input' => '<input type="{{type}}" name="{{name}}"{{attrs}} class="form-control"/>',

    'textarea' => '<textarea name="{{name}}"{{attrs}} class="form-control">{{value}}</textarea>',

    'select' => '<select name="{{name}}"{{attrs}} class="form-control">{{content}}</select>',

    'checkboxWrapper' => '<div class="checkbox">{{label}}</div>',
    'radioWrapper' => '<div class="radio">{{label}}</div>',

    'submitContainer' => '<div class="form-group">{{content}}</div>',

];