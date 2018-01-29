var myVar;

function loader() {
    myVar = setTimeout(showPage, 3000);
}

function showPage() {
    $(".loader ").show();
}

function aprint() {
    document.getElementById("labelApp").style.marginLeft = "200px";
    $(".tdcek ").hide();
    $(".thcek ").hide();
    $(".tdfoot ").hide();
    $(".dataTables_length ").hide();
    $("#example_paginate").hide();
    $("#example_info").hide();
    $(".dataTables_filter ").hide();
    $("#" + "example" + " input:checkbox").hide();
    $('.btn-group').hide();
    window.print();
    document.getElementById("labelApp").style.marginLeft = "500px";
    $(".tdfoot ").show();
    $(".tdcek ").show();
    $(".thcek ").show();
    $("#example_info").show();
    $("#example_paginate ").show();
    $(".dataTables_filter ").show();
    $(".dataTables_length ").show();
    $('.btn-group').show();
    $("#" + "example" + " input:checkbox").show();
}

function printRental() {
    document.getElementById("labelApp").style.marginLeft = "200px";
    $(".tdcek ").hide();
    $(".thcek ").hide();
    $(".tdfoot ").hide();
    $(".dataTables_length ").hide();
    $("#example_paginate").hide();
    $("#example_info").hide();
	$("#hapus_aja").hide();
    $(".dataTables_filter ").hide();
    $("#" + "example" + " input:checkbox").hide();
    $('.btn-group').hide();
    window.print();
    document.getElementById("labelApp").style.marginLeft = "500px";
    $(".tdfoot ").show();
    $(".tdcek ").show();
    $(".thcek ").show();
    $("#example_info").show();
    $("#example_paginate ").show();
    $(".dataTables_filter ").show();
    $(".dataTables_length ").show();
    $('.btn-group').show();
    $("#" + "example" + " input:checkbox").show();
}

function aprint2() {
    $(".tdcek ").hide();
    $(".thcek ").hide();
    $(".dataTables_length ").hide();
    $("#example_paginate").hide();
    $("#example_info").hide();
    $(".dataTables_filter ").hide();
    $("#" + "example" + " input:checkbox").hide();
    $('.btn-group').hide();
    window.print();
    $(".tdcek ").show();
    $(".thcek ").show();
    $("#example_info").show();
    $("#example_paginate ").show();
    $(".dataTables_filter ").show();
    $(".dataTables_length ").show();
    $('.btn-group').show();
    $("#" + "example" + " input:checkbox").show();
}





function save() {
    $('input[class="ceksave"]:checked').each(function () {
        alert('This entry will be deleted: ' + this.value); // this will alert you the value what you get. After finisgin to get correct value you can delete this
        $.ajax({
            type: "post",
            url: "inserttable.php",
            data: $('#formtable').serialize()
        });
        console.log(this);
    });
}

function saveRental() {
    $('input[class="ceksave"]:checked').each(function () {
   //     alert('This entry will be deleted: ' + this.value); // this will alert you the value what you get. After finisgin to get correct value you can delete this
        $.ajax({
            type: "post",
            url: "insertRental.php",
            data: $('#formtable').serialize()
        });
   //     console.log(this);
    });
}

function simpancoy() {
    $('input[class="ceksave"]:checked').each(function () {
        alert('This entry will be deleted: ' + this.value); // this will alert you the value what you get. After finisgin to get correct value you can delete this
        $.ajax({
            type: "post",
            url: "inserttable2.php",
            data: $('#formtable').serialize()
        });
        console.log(this);
    });
}

$('html').keyup(function (e) {
    if (e.keyCode == 46) {
        deleteRow();
    }
});
function del() {
    $('input[class="cek"]:checked').each(function () {
        $.ajax({
            type: "GET",
            url: "delete.php",
            data: "id=" + this.value
        });
    });
    location.reload();
}

$(document).ready(function () {
    ca();
    function ca() {
        var $overall = 0;

        $("tr.sum").each(function () {

            var $qnt = $(this).find(".price").val();
            var $price = $(this).find(".quantity").val();
            var sum = parseInt($price) * parseInt($qnt);
            if (isNaN(sum)) {
                sum = 0;
            }
            $(this).find("td").eq(5).text(Math.round(sum * 100) / 100);
            $overall += sum;
        });
        $("#jumlah").val($overall);
    }

    $('#example tbody').bind('change keyup', "input[name='price[]']", function () {
        ca();
    });
    $('#example tbody').bind('change keyup', "input[name='quantity[]']", function () {
        ca();
    });
    $('#example tbody').bind('change keyup', "input[name='prices[]']", function () {
        ca();
    });
    $('#example tbody').bind('change keyup', "input[name='quantitys[]']", function () {
        ca();
    });

    var datatext;
    var data1 = 0;
    var datanomor = 0;
    var datadel = [];
	var dataRentaldel = [];
    var codetransdel = [];
	var rentaldel = [];
    var rows_selected = [];
    var countdel = 0;
    var countsave = 0;

    $('#example tr').click(function (event) {
        if (event.target.type !== 'checkbox') {
            $(':checkbox', this).trigger('click');
        }

    });
    console.log($('#formtable').serialize());
    $('#example').DataTable({
    });
    var t = $('#example').DataTable();

    $('#addRow').on('click', function () {
        t.row.add([
            "<tr class='sum'>" +
                    "<td style='text-align:center;'><input style='margin-left:12px'type='checkbox' class='ceksave' name='cek[]' checked /></td>",
            "<td><input type='hidden' name='codetransaction[]' /></td>",
            "<td><input id='typeprod' name='productname[]' list='typeProd' placeholder=''style='width:100%; text-aling:left' name='productname[]' /></td>",
            "<td><input type='text' class='price' placeholder=''style='width:100%;text-align:right' name='price[]' value='0'></td>",
            "<td><input type='text' class='quantity' placeholder=''style='width:100%;text-align:right' name='quantity[]' value='0'></td>",
            "<td><input type='text' placeholder=''style='width:100%;text-align:right' name='total[]'></td></tr>"
        ]).draw(true).nodes()
                .to$()
                .addClass('sum');
        ;
        countsave = 1;
    });

    $('#tambahRow').on('click', function () {
        $.ajax({
            type: "POST",
            url: "idotomatis.php",
            datatype: "html",
            success: function (data) {
                if (data1 <= 0) {
                    data1 = parseInt(data);
                }
                datanomor = data1;
                if (datanomor < 10) {
                    datatext = 'TR-00' + datanomor;
                } else if (datanomor >= 10 && datanomor < 100) {
                    datatext = 'TR-0' + datanomor;
                }
                if (datanomor >= 100 && datanomor < 1000) {
                    datatext = 'TR-' + datanomor;
                }
                t.row.add([
                    "<tr><td><input type='checkbox' class='ceksave' name='cek[]' checked  /></td>",
                    "<td> </td>",
                    "<td><input type='text' style='width:100%;' name='codetransaction[]' value ='" + datatext + "'></td>",
                    "<td><input type='text' style='width:100%;' name='transactionname[]'></td>",
                    "<td><input type='text' style='width:100%;' name='customername[]'></td>",
                    "<td><input type='date' style='width:100%;' name='datetransaction[]'></td>",
                    "<td><select style='width:100%;'name='address[]'><option class='form-control'>Bogor</option><option class='form-control'>Bekasi</option></select></td>",
                    "<td> </td></tr>"
                ]).draw(true);
                data1++;
                countsave = 1;
            }
        });

    });
	$('#tambahBaris').on('click', function () {
        $.ajax({
            type: "POST",
            url: "id_rental.php",
            datatype: "html",
            success: function (data) {
                if (data1 <= 0) {
                    data1 = parseInt(data);
                }
                datanomor = data1;
                if (datanomor < 10) {
                    datatext = 'R-00' + datanomor;
                } else if (datanomor >= 10 && datanomor < 100) {
                    datatext = 'R-0' + datanomor;
                }
                if (datanomor >= 100 && datanomor < 1000) {
                    datatext = 'R-' + datanomor;
                }
                t.row.add([
                    "<tr><td><input type='checkbox' class='ceksave' name='cek[]' checked  /></td>",
                    "<td> </td>",
                    "<td><input type='text' style='width:100%;' name='id[]' value ='" + datatext + "'></td>",
                    "<td><input type='text' style='width:100%;' name='name[]'></td>",
                    "<td><input type='text' style='width:100%;' name='car[]'></td>",
                    "<td><input type='date' style='width:100%;' name='how_long[]'></td>",
					"<td><input type='text' style='width:100%;' name='cost[]'></td>",
					"<td><input type='text' style='width:100%;' name='total[]'></td>",
                    "<td> </td></tr>"
                ]).draw(true);
                data1++;
                countsave = 1;
            }
        });

    });

    $('#example tbody').on('click', 'input[type="checkbox"]', function (e) {
        var $row = $(this).closest('tr');
        var data = t.row($row).data();
        if (this.checked) {
            $row.addClass('selected');
        } else {
            $row.removeClass('selected');
        }
    });

    $('#deleted').on('click', function () {
        $('input[class="cekas"]:checked').each(function () {
            datadel.push(this.value);
        });
        for (var i = -1; i <= $('input[class="cekas"]:checked').length; i++) {
            t.row('.selected').remove().draw(true);
        }
    });

    $('#hapus').on('click', function () {
        $('input[class="actionButton"]:checked').each(function () {
            datadel.push(this.value);
            codetransdel.push($(this).closest("tr").children().find("input[name='codetransactions[]']").val());
            console.log(codetransdel)
        });
        for (var i = -1; i <= $('input[class="actionButton"]:checked').length; i++) {
            t.row('.selected').remove().draw(true);
        }
    });
	
	$('#deleteRental').on('click', function () {
         $('input[class="actionButton"]:checked').each(function () {
			alert('This entry will be deleted: ' + this.value);
            datadel.push(this.value);
            rentaldel.push($(this).closest("tr").children().find("input[name='id[]']").val());
            console.log(rentaldel)
        });
        for (var i = -1; i <= $('input[class="actionButton"]:checked').length; i++) {
            t.row('.selected').remove().draw(true);
        }
    });

    
    $('#update2').on('click', function () {
        saveall2();
        location.reload();
    });
    
    function saveall2() {
        if (countsave > 0) {
            console.log($('#formtable').serialize());
            simpancoy();
            countsave = 0;
        }
        if (datadel.length > 0 && codetransdel.length > 0) {
            for (var i = 0; i <= datadel.length; i++) {
                $.ajax({
                    type: "GET",
                    url: "delete2.php",
                    data: "id=" + datadel[i] + "code=" + codetransdel[i]
                });
            }
            datadel = [];
            codetransdel = [];
        }
        $("input:checkbox.actionButton").prop('checked', true);
        $('input[class="actionButton"]:checked').each(function () {
            console.log($('#formtable').serialize());
            $.ajax({
                type: "post",
                url: "update2.php",
                data: $('#formtable').serialize().trim()
            });

        });


        $("input:checkbox.cek").prop('checked', false);

        location.reload();
        $(".loader ").hide();
    }
    function saveall() {
        if (countsave > 0) {
            console.log($('#formtable').serialize());
            save();
            countsave = 0;
        }
        if (datadel.length > 0) {
            for (var i = 0; i <= datadel.length; i++) {
                $.ajax({
                    type: "GET",
                    url: "delete.php",
                    data: "id=" + datadel[i]
                });
        //        console.log(datadel);
            }
            datadel = [];
        }
        $("input:checkbox.cekas").prop('checked', true);
        $('input[class="cekas"]:checked').each(function () {
            console.log($('#formtable').serialize());
            $.ajax({
                type: "post",
                url: "update.php",
                data: $('#formtable').serialize().trim()

            });

        });
        location.reload();
        $("input:checkbox.cekas").prop('checked', false);
        location.reload();
    }
	
	$('#updateRental').on('click', function () {
        saveall3();	
        location.reload();
    });
    
    function saveall3() {
        if (countsave > 0) {
            console.log($('#formtable').serialize());
            saveRental();
            countsave = 0;
        }
        if (datadel.length > 0) {
            for (var i = 0; i <= datadel.length; i++) {
                $.ajax({
                    type: "GET",
                    url: "deleteRental.php",
                    data: "id=" + datadel[i]
                });
                console.log(datadel);
            }
            datadel = [];
        }
        $("input:checkbox.actionButton").prop('checked', true);
        $('input[class="actionButton"]:checked').each(function () {
            console.log($('#formtable').serialize());
            $.ajax({
                type: "post",
                url: "updateRental.php",
                data: $('#formtable').serialize().trim()
            });

        });


        $("input:checkbox.cek").prop('checked', false);

        location.reload();
        $(".loader ").hide();
    }

    $('#updated').on('click', function () {
        saveall();
        location.reload();
    });
    $(".loader ").hide();
});



$(window).load(function () {
//save the selector so you don't have to do the lookup everytime
    $dropdown = $("#context-menu");
    $(".actbut").click(function () {
        //get row ID
        loader();
        var id = $(this).closest("tr").children().find("input[name='codetransactions[]']").val();
        //move dropdown menu
        $(this).after($dropdown);
        //update links
        $dropdown.find(".viewLink").attr("href", "formresmi.php?codetransaction=" + id);
        //show dropdown
        $(this).dropdown();
        $(".loader ").hide();
    });
});

$(window).load(function () {
//save the selector so you don't have to do the lookup everytime
    $dropdown = $("#context-menuR");
    $(".actbut").click(function () {
        //get row ID
        loader();
        var id_rental = $(this).closest("tr").children().find("input[name='ids[]']").val();
        //move dropdown menu
        $(this).after($dropdown);
        //update links
        $dropdown.find(".viewLinkRental").attr("href", "rental.php?id=" + id_rental);
        //show dropdown
        $(this).dropdown();
        $(".loader ").hide();
    });
});
