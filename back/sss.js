function catasubedit(e) {
    var catamainid = $(e).parents("tr").children('td').find("input[name=catamainid]").val();
    var catamainname = $(e).parents("tr").children('td').eq(2).find('span').text()
    var catasubid = $(e).parents("tr").children('td').find("input[name=catasubid]").val();
    var catasubname = $(e).parents("tr").children('td').eq(3).find('span').text()
    if (catamainid.length > 0) {
        $(".catamdymodal").modal();

        if (catamainid.length > 0 && (catasubid = undefined))
    }
    // console.log(catamainid)
    // console.log(catamainname)
    // console.log(catasubid)
    // console.log(catasubname)
    // $(".catamdymodal").modal();
}