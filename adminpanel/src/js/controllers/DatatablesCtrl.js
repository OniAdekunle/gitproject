var $ = require( 'jquery' );
require('datatables.net');
require('datatables.net-bs4');
require('datatables.net-responsive');
require('datatables.net-responsive-bs4');

var DatatablesCtrl = (function(){

    var initalizeDatatables = function(){
        $(document).ready(function() {
            $('#employee_grid').DataTable( {
                details: {
                    renderer: function (api, rowIdx) {
                        var data = api.cells(rowIdx, ':hidden').eq(0).map(function (cell) {
                            var header = $(api.column(cell.column).header());
                            return '<p style="color:#00A">' + header.text() + ' : ' + api.cell(cell).data() + '</p>';
                        }).toArray().join('');

                        return data ? $('<table/>').append(data) : false;
                    }
                },
                "ajax": '../src/data/datatables.json'
            } );
        });
    };
    var init = function(){
        initalizeDatatables();
    };

    return {
        init: init
    };
})();

module.exports = DatatablesCtrl;