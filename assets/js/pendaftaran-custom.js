$(document).ready(function () {
	$(".select").select2();
});
function hafalanDialog(url, $id = null) {
	$("#btn-simpan").attr("href", url);
	$("#btn-simpan").attr("onclick", "simpanHafalan(" + $id + ");return false");
	$("#simpanModal").modal();
	return false;
}

function simpanHafalan($id = null) {
	let mulaiAyat = $(".mulaiAyat").val();
	let akhirAyat = $(".akhirAyat").val();
	let surat = $(".surat").val();
	$("#hafalan" + $id).val(surat + " : " + mulaiAyat + " - " + akhirAyat);
}

function tambah($id = null) {
	let bintang = document.getElementById("bintang" + $id);
	let count_bintang = bintang.getElementsByTagName("i").length;
	if (count_bintang < 5) {
		$("#bintang" + $id).prepend("<i class='mdi mdi-star'></i>");
		return false;
	} else {
		alert("Point pencapaian sudah maksimal");
	}
}

function kurang($id = null) {
	let bintang = document.getElementById("bintang" + $id);
	let count_bintang = bintang.getElementsByTagName("i").length;
	if (count_bintang > 0) {
		document.getElementById("bintang" + $id).removeChild(bintang.childNodes[0]);
	} else {
		alert("Belum ada point");
	}
}

function myFunction() {
	var input, filter, table, tr, td, i;
	input = document.getElementById("mylist");
	filter = input.value.toUpperCase();
	table = document.getElementById("table1");
	tr = table.getElementsByTagName("tr");
	for (i = 0; i < tr.length; i++) {
		td = tr[i].getElementsByTagName("td")[1];
		if (td) {
			if (td.innerHTML.toUpperCase().indexOf(filter) > -1) {
				tr[i].style.display = "";
			} else {
				tr[i].style.display = "none";
			}
		}
	}
}

$(document).ready(function (e) {
	App.init();
	App.dataTables();
});
