var eddy = [
    "To live and let live, without clamour for distinction or recognition; to wait on divine love; to write truth first on the tablet of one's own heart - this is the sanity and perfection of living.",
    
    "The age looks steadily to the redressing of wrong, to the righting of every form of error and injustice; and a tireless and prying philanthropy, which is almost omniscient, is one of the most hopeful characteristics of the time.",
    
    "True prayer is not asking God for love; it is learning to love, and to include all mankind in one affection.",
    
    "Health is not a condition of matter, but of Mind.",
    
    "We classify disease as error, which nothing but Truth or Mind can heal.",
    
    "Disease is an experience of a so-called mortal mind."
    
];

 document.getElementById("trigger").addEventListener("mouseover", mouseOver)

function mouseOver(){
    var num = Math.floor(Math.random() * 6)
    
    document.getElementById("target").innerHTML = eddy[num]
    document.getElementById("target2").innerHTML = "-Mary Baker Eddy"

};