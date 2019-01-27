$("#sy-link").click(function(){

	$(".sy-tab").load("schoolyear");

	//remove other tabs
	//sy
$(".dpt-tab").children().remove();	//dpt
$(".grd-tab").children().remove();	//grd
$(".sct-tab").children().remove();	//sct
$(".sbj-tab").children().remove();	//sbj
$(".rm-tab").children().remove();	//rm
$(".fac-tab").children().remove();	//fac
$(".std-tab").children().remove();	//std
$(".gud-tab").children().remove();	//gud
$(".adm-tab").children().remove();	//adm
$(".facload-tab").children().remove();	//facload
$(".usrlvl-tab").children().remove();	//usrlvl
$(".eval-tab").children().remove();	//eval

});


$("#dpt-link").click(function(){

	$(".dpt-tab").load("department");

		//remove other tabs
$(".sy-tab").children().remove();//sy
//dpt
$(".grd-tab").children().remove();	//grd
$(".sct-tab").children().remove();	//sct
$(".sbj-tab").children().remove();	//sbj
$(".rm-tab").children().remove();	//rm
$(".fac-tab").children().remove();	//fac
$(".std-tab").children().remove();	//std
$(".gud-tab").children().remove();	//gud
$(".adm-tab").children().remove();	//adm
$(".facload-tab").children().remove();	//facload
$(".usrlvl-tab").children().remove();	//usrlvl
$(".eval-tab").children().remove();	//eval


});

$("#grd-link").click(function(){

	$(".grd-tab").load("grade");

			//remove other tabs
$(".sy-tab").children().remove();//sy
$(".dpt-tab").children().remove();//dpt
//grd
$(".sct-tab").children().remove();	//sct
$(".sbj-tab").children().remove();	//sbj
$(".rm-tab").children().remove();	//rm
$(".fac-tab").children().remove();	//fac
$(".std-tab").children().remove();	//std
$(".gud-tab").children().remove();	//gud
$(".adm-tab").children().remove();	//adm
$(".facload-tab").children().remove();	//facload
$(".usrlvl-tab").children().remove();	//usrlvl
$(".eval-tab").children().remove();	//eval


});

$("#sct-link").click(function(){

	$(".sct-tab").load("section");

			//remove other tabs
$(".sy-tab").children().remove();//sy
$(".dpt-tab").children().remove();//dpt
$(".grd-tab").children().remove();//grd
//sct
$(".sbj-tab").children().remove();	//sbj
$(".rm-tab").children().remove();	//rm
$(".fac-tab").children().remove();	//fac
$(".std-tab").children().remove();	//std
$(".gud-tab").children().remove();	//gud
$(".adm-tab").children().remove();	//adm
$(".facload-tab").children().remove();	//facload
$(".usrlvl-tab").children().remove();	//usrlvl
$(".eval-tab").children().remove();	//eval


});

$("#sbj-link").click(function(){

	$(".sbj-tab").load("subject");

			//remove other tabs
$(".sy-tab").children().remove();//sy
$(".dpt-tab").children().remove();//dpt
$(".grd-tab").children().remove();//grd
$(".sct-tab").children().remove();//sct
	//sbj
$(".rm-tab").children().remove();	//rm
$(".fac-tab").children().remove();	//fac
$(".std-tab").children().remove();	//std
$(".gud-tab").children().remove();	//gud
$(".adm-tab").children().remove();	//adm
$(".facload-tab").children().remove();	//facload
$(".usrlvl-tab").children().remove();	//usrlvl
$(".eval-tab").children().remove();	//eval


});

$("#rm-link").click(function(){

	$(".rm-tab").load("room");

			//remove other tabs
$(".sy-tab").children().remove();//sy
$(".dpt-tab").children().remove();//dpt
$(".grd-tab").children().remove();//grd
$(".sct-tab").children().remove();//sct
$(".sbj-tab").children().remove();//sbj
//rm
$(".fac-tab").children().remove();	//fac
$(".std-tab").children().remove();	//std
$(".gud-tab").children().remove();	//gud
$(".adm-tab").children().remove();	//adm
$(".facload-tab").children().remove();	//facload
$(".usrlvl-tab").children().remove();	//usrlvl
$(".eval-tab").children().remove();	//eval


});

$("#fac-link").click(function(){

	$(".fac-tab").load("faculty");

			//remove other tabs
$(".sy-tab").children().remove();//sy
$(".dpt-tab").children().remove();//dpt
$(".grd-tab").children().remove();//grd
$(".sct-tab").children().remove();//sct
$(".sbj-tab").children().remove();//sbj
$(".rm-tab").children().remove();//rm
//fac
$(".std-tab").children().remove();	//std
$(".gud-tab").children().remove();	//gud
$(".adm-tab").children().remove();	//adm
$(".facload-tab").children().remove();	//facload
$(".usrlvl-tab").children().remove();	//usrlvl
$(".eval-tab").children().remove();	//eval


});


$("#std-link").click(function(){

	$(".std-tab").load("student");

			//remove other tabs
$(".sy-tab").children().remove();//sy
$(".dpt-tab").children().remove();//dpt
$(".grd-tab").children().remove();//grd
$(".sct-tab").children().remove();//sct
$(".sbj-tab").children().remove();//sbj
$(".rm-tab").children().remove();//rm
$(".fac-tab").children().remove();	//fac
//std
$(".gud-tab").children().remove();	//gud
$(".adm-tab").children().remove();	//adm
$(".facload-tab").children().remove();	//facload
$(".usrlvl-tab").children().remove();	//usrlvl
$(".eval-tab").children().remove();	//eval


});

$("#gud-link").click(function(){

	$(".gud-tab").load("guidance");

			//remove other tabs
$(".sy-tab").children().remove();//sy
$(".dpt-tab").children().remove();//dpt
$(".grd-tab").children().remove();//grd
$(".sct-tab").children().remove();//sct
$(".sbj-tab").children().remove();//sbj
$(".rm-tab").children().remove();//rm
$(".fac-tab").children().remove();	//fac
$(".std-tab").children().remove();//std
//gud
$(".adm-tab").children().remove();	//adm
$(".facload-tab").children().remove();	//facload
$(".usrlvl-tab").children().remove();	//usrlvl
$(".eval-tab").children().remove();	//eval


});

$("#adm-link").click(function(){

	$(".adm-tab").load("administrator");

			//remove other tabs
$(".sy-tab").children().remove();//sy
$(".dpt-tab").children().remove();//dpt
$(".grd-tab").children().remove();//grd
$(".sct-tab").children().remove();//sct
$(".sbj-tab").children().remove();//sbj
$(".rm-tab").children().remove();//rm
$(".fac-tab").children().remove();	//fac
$(".std-tab").children().remove();//std
$(".gud-tab").children().remove();//gud
//adm
$(".facload-tab").children().remove();	//facload
$(".usrlvl-tab").children().remove();	//usrlvl
$(".eval-tab").children().remove();	//eval


});

$("#facload-link").click(function(){

	$(".facload-tab").load("facloading");


			//remove other tabs
$(".sy-tab").children().remove();//sy
$(".dpt-tab").children().remove();//dpt
$(".grd-tab").children().remove();//grd
$(".sct-tab").children().remove();//sct
$(".sbj-tab").children().remove();//sbj
$(".rm-tab").children().remove();//rm
$(".fac-tab").children().remove();	//fac
$(".std-tab").children().remove();//std
$(".gud-tab").children().remove();//gud
$(".adm-tab").children().remove();//adm
//facload
$(".usrlvl-tab").children().remove();	//usrlvl
$(".eval-tab").children().remove();	//eval


});

$("#usrlvl-link").click(function(){

	$(".usrlvl-tab").load("userlevel");

			//remove other tabs
$(".sy-tab").children().remove();//sy
$(".dpt-tab").children().remove();//dpt
$(".grd-tab").children().remove();//grd
$(".sct-tab").children().remove();//sct
$(".sbj-tab").children().remove();//sbj
$(".rm-tab").children().remove();//rm
$(".fac-tab").children().remove();	//fac
$(".std-tab").children().remove();//std
$(".gud-tab").children().remove();//gud
$(".adm-tab").children().remove();//adm
$(".facload-tab").children().remove();//facload
	//usrlvl
$(".eval-tab").children().remove();	//eval


});

$("#eval-link").click(function(){

	$(".eval-tab").load("evaluation");

			//remove other tabs
$(".sy-tab").children().remove();//sy
$(".dpt-tab").children().remove();//dpt
$(".grd-tab").children().remove();//grd
$(".sct-tab").children().remove();//sct
$(".sbj-tab").children().remove();//sbj
$(".rm-tab").children().remove();//rm
$(".fac-tab").children().remove();	//fac
$(".std-tab").children().remove();//std
$(".gud-tab").children().remove();//gud
$(".adm-tab").children().remove();//adm
$(".facload-tab").children().remove();//facload
$(".usrlvl-tab").children().remove();//usrlvl
//eval


});