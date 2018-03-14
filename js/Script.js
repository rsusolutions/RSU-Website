/// <reference path="jquery-latest.min.js" />

function ExecutePageMethod( param, successFn, errorFn) {
   
    // console.log(paramList);
    $('#loading-gif-advanced').show();
    $.ajax({
        type: "POST",
        //url: "http://localhost/GenericService/RSUGenericService.svc/GenericAPI/",
       // url: "http://192.168.1.3/Generic_Service/RSUGenericService.svc/GenericAPI/",
        url:"http://35.154.208.191:7778/RSUGenericService.svc/GenericAPIEmail/",
        cache: false,
       
        data: param,
        headers: { 'Content-Type': 'application/x-www-form-urlencoded' },
        success: successFn,
        error:
            //function (xhr, status, error) {
            //alert(error);
            function( jqXhr, textStatus, errorThrown ){
                alert( errorThrown ); 
            
  
        }
    });

    $('#loading-gif-advanced').hide();
    //var xmlDoc = $.parseXML(result),
    //                $xml = $(xmlDoc);
    //var response = $.parseXML($(xmlDoc).find('string').text())
    //var FRes = "";
    //var Res = "";
    //$(response).find('Response').each(function () {

    //    FRes = $(this).find('FailureReason').text();
    //});
    //Res = $(response).find('Response').text();

}
function encodeXml(string) {
    return string.replace(/([\&"<>])/g, function (str, item) {
        return xml_special_to_escaped_one_map[item];
    });
};

function decodeXml(string) {
    return string.replace(/(&quot;|&lt;|&gt;|&amp;)/g,
        function (str, item) {
            return escaped_one_to_xml_special_map[item];
        });
}
function decodeHTMLEntities(text) {
    var entities = [
        ['amp', '&'],
        ['apos', '\''],
        ['#x27', '\''],
        ['#x2F', '/'],
        ['#39', '\''],
        ['#47', '/'],
        ['lt', '<'],
        ['gt', '>'],
        ['nbsp', ' '],
        ['quot', '"']
    ];

    for (var i = 0, max = entities.length; i < max; ++i)
        text = text.replace(new RegExp('&' + entities[i][0] + ';', 'g'), entities[i][1]);

    return text;
}

