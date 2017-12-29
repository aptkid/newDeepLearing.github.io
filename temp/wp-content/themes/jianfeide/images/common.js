// JScript 文件
function get(id)   
{   
     return (id.constructor == String) ? document.getElementById(id) : id;   
}
function deleteone(id)
{
    if(confirm("您确定要删除吗？"))
    {
        var url=window.location.href;
        if(url.indexOf("?")=="-1")
        {
            url+="?";
        }
        else
        {
            url+="&";
        }
        var idposition=url.indexOf("id=");
        if(idposition!="-1")
        {
            url=url.substring(0,idposition);
        }
        window.location.href=url+"id="+id;
    }
}
    function getuniquenum()
    {
        var myDate = new Date();
        return myDate.getHours()+""+myDate.getMinutes()+""+myDate.getSeconds()+""+myDate.getMilliseconds();
    }