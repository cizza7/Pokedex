function scf( n ){

    var ai = Math.floor((Math.random() * 3));

    switch(n){

        case 0:
            if( ai == 0 ) alert("hai pareggiato");
            if( ai == 1 ) alert("hai perso");
            if( ai == 2 ) alert("hai vinto");

            break;

        case 1:
            if( ai == 1 ) alert("hai pareggiato");
            if( ai == 2 ) alert("hai perso");
            if( ai == 0 ) alert("hai vinto");

            break;

        case 2:
            if( ai == 2 ) alert("hai pareggiato");
            if( ai == 0 ) alert("hai perso");
            if( ai == 1 ) alert("hai vinto");

            break;

        default:

            alert("fatal error");
            break;

    }

}
