const express = require("express");
const router = express.Router();
const company = "Intelligent Software Enginneering", 
    titleIndex = ".::Welcome to ISE - Software developers",
    Author = "Eric Martinez Acelas",
    titleContact = "ISE - Contact", 
    ARC_text = "architectural resource controllers", 
    compra_gratis = "buy free here";
/*
router.get('/',(req,res) => {
    res.render('index',{title:"ARControllers - INDEX"});
});

router.get('/contact',(req,res) => {
    res.render('contact',{title:"ARControllers - Contacto"});
});
*/
router.get('/',(req,res) => {
    res.render('index.html',{company,titleIndex,Author});
});
router.get('/contact',(req,res) => {
    res.render('contact.html',{company,titleContact,Author});
});




module.exports = router;