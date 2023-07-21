const mongoose = require("mongoose");
mongoose.connect("mongodb://localhost:27017/vibhav", {
    useNewUrlParser:true,
    useUnifiedTopology:true,
    useCreateIndex:true
}).then(() => {
    console.log(`connectin successful`);
}).catch((e) => {
    console.log(`no connection`);
})