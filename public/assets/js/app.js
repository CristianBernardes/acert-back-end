function getUserGitHub() {
    let user = document.getElementById("search").value;
    fetch("/api/github-users/" + user)
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
                        text: data.message,
                        icon: "error",
                    });
                }
            });
        })
        .catch(function (err) {
            console.error('Failed retrieving information', err);
        });
}

function getInfoAcert() {
    fetch("api/get-info")
        .then(function (response) {
            response.text().then(function (data) {
                if (!data.message) {
                    document.getElementById("acert-content").innerHTML = data;
                } else {
                    swal({
                        title: "Ops!",
                        text: data.message,
                        icon: "error",
                    });
                }
            });
        })
        .catch(function (err) {
            console.error('Failed retrieving information', err);
        });
}