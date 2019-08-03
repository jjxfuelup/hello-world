   @ResponseBody
    @RequestMapping("/getMySeat")
    public String getMySeatSuccess(@RequestParam("callback") String callback){
        Gson gson=new Gson();
        Map<String,String> map=new HashMap<>();
        map.put("seat","1_2_06_12");
        logger.info(callback);
        return callback+"("+gson.toJson(map)+")";
    }
