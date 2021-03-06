<?php 

load_script([
    'jquery',
    'jquery-ui',
    'popper',
    'bootstrap',
    'intranet/custom',
    'intranet/functions',
    'moment',
]);

load_script_plugin(
    [
        'toast/toastr.min',
        'select2/select2',
        'bootstrap-table/bootstrap-table',
        'bootstrap-table/bootstrap-table-es-ES',
        'bootstrap-table/export/tableExport/tableExport',
        'bootstrap-table/export/tableExport/html2canvas',
        'bootstrap-table/export/tableExport/jquery.base64',
        'bootstrap-table/export/tableExport/tableExport',
        'bootstrap-table/export/bootstrap-table-export',
        'wizard/wizard',
    ]
);