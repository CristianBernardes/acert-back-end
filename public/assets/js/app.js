function getUserGitHub() {
    let user = document.getElementById("search").value;
    fetch("https://api.github.com/users/" + user)
        .then(function (response) {
            response.json().then(function (data) {
                if (!data.message) {
                    document.getElementById("avatar").src = data.avatar_url;
                    document.getElementById("name").innerHTML = data.name;
                    document.getElementById("location").innerHTML = data.location;
                    document.getElementById("bio").innerHTML = data.bio;
                    document.getElementById("public-repos").innerHTML = data.public_repos;
                    document.getElementById("public-gists").innerHTML = data.public_gists;
                    document.getElementById("followers").innerHTML = data.followers;
                    document.getElementById("following").innerHTML = data.following;
                } else {
                    swal({
                        title: "Ops!",
                        text: "Usuário não encontrado",
                        icon: "error",
                    });
                }
            });
        })
        .catch(function (err) {
            console.error("Failed retrieving information", err);
        });
}

function getInfoAcert() {
    const headers = new Headers({
        'Content-Type' : 'application/json; charset=UTF-8'
    });
    const negotiation = { token: "7e8230ae820bd5f3d4f022489415dbb1", usuario: "2143", senha: "123456" };
    const body = JSON.stringify(negotiation);
    const method = "POST";

    const config = {
        headers,
        method,
        body
    };

    fetch("https://apiweb-enwzofr76a-uc.a.run.app/auth/login", config).then(function (response) {
        response.text().then(function (data) {
            document.getElementById("acert-content").innerHTML = data;
        });
    }).catch(function (err) {
        console.error("Failed retrieving information", err);
    });
}