// When the page has fully loaded...
window.addEventListener('load', () => {

    // Send data to PHP
    async function sendData(url, username, password) {
        const data = {
            user: username,
            password
        }
        const init = {
            method: 'POST',
            body: JSON.stringify(data),
            headers: {
                'Content-Type': 'application/json'
            }
        }

        const response = await fetch(url, init);
        return response;
    }

    // converts the first letter of a name to uppercase
    function capitalize(name) {
        if (name.trim() != '') {
            return name[0].toUpperCase() + name.slice(1);
        }
        return '';
    }

    // Print a message
    function message(msg) {
        const message = document.getElementById('message');
        message.innerText = msg;
    }
    
    function validateData(username, password) {
        username = capitalize(username);

        // We validate if the username and password are not empty
        if (username.trim() == '' || password.trim() == '' ) {
            message('User or Password empty');

        // We validate that the username does not have more than 8 characters
        } else if (username.length >= 8) {
            message('User maximum 8 characters');

        } else {
            // We validate that the user does not exist
            const url = '/php/validate_data.php';
            sendData(url, username, password)
            .then(response => response.json())
            .then(data => {
                if (data.userExists === 1) {
                    message('The user exists');

                } else {
                    // We store user data
                    const url = '/php/save_data.php';
                    sendData(url, username, password)
                    .then(response => {
                        if (response.status === 200) {
                            message('Save data!');
                        }
                    });
                }
            });
        }
    }

    function createAccount() {
        const username = document.getElementById('input-username').value;
        const password = document.getElementById('input-password').value;

        validateData(username, password);
    }

    const btnSignUp = document.getElementById('btn-sign-up');
    btnSignUp.addEventListener('click', createAccount);
});