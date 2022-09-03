console.log(document.querySelector('#createPost'))

document.querySelector('#createPost button')
        .addEventListener('click',function (event) {
        event.preventDefault()

        console.log('Prevent')
        let nam = document.getElementById('fname');
        let suj = document.getElementById('sujet');
        let des = document.getElementById('description');

        let isValidSujet = true,
            isValidFname = true,
            isValidDes = true;

        // if forms are NULL
        try {
            if (nam.value == '') throw "You didnt add a name";
            if (suj.value == '') throw "You didnt add a subject name";
            if (des.value == '') throw "You didnt add a Description";
        }
        catch(err) {
            alert(err);
        }

        // Test of length
        if (nam.value.length > 20) {
                console.log('Trop long');
                nam.style.borderColor="red";
                isValidFname = false;
                document.getElementById("p2").innerHTML +=
                  "20 char MAX.";
        }

        if (suj.value.length > 30) {
                    console.log('Sujet Trop long');
                    suj.style.borderColor="red";
                    isValidSujet = false;
                    document.getElementById("p1").innerHTML +=
                      "30 char MAX.";

        }

        if (des.value.length > 300) {
                    console.log('Sujet Trop long');
                    suj.style.borderColor="red";
                    isValidDes = false;
                    document.getElementById("p3").innerHTML +=
                      "300 char MAX.";
        }



        if ((isValidSujet) && (isValidFname) && (isValidSujet))
        {

          document.getElementById('createPost').submit();
        }


      });
