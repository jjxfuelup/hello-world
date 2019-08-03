header('content-type:application:json;charset=utf8');  
header('Access-Control-Allow-Origin:*');  
header('Access-Control-Allow-Methods:POST');  
header('Access-Control-Allow-Headers:x-requested-with,content-type');  

@ResponseBody
    @RequestMapping("/getMySeat")
    public String getMySeatSuccess(@RequestParam("callback") String callback){
        Gson gson=new Gson();
        Map<String,String> map=new HashMap<>();
        map.put("seat","1_2_06_12");
        logger.info(callback);
        return callback+"("+gson.toJson(map)+")";
    }
