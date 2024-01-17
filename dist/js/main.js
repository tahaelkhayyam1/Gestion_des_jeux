function showautori() {
  !0 == document.getElementById("foncoui").checked
    ? (document.getElementById("Autorisation").style.display = "block")
    : ((document.getElementById("Autorisation").style.display = "none"),
      (document.getElementById("Autorisationfile").style.display = "none"),
      document.getElementById("autooui").checked);
}
function showfileupload() {
  !0 == document.getElementById("autooui").checked
    ? (document.getElementById("Autorisationfile").style.display = "block")
    : (document.getElementById("Autorisationfile").style.display = "none");
}
$("form").on("change", ".file-upload-field", function () {
  $(this)
    .parent(".file-upload-wrapper")
    .attr(
      "data-text",
      $(this)
        .val()
        .replace(/.*(\/|\\)/, "")
    );
}),
  (document.getElementById("Autorisation").style.display = "none"),
  (document.getElementById("Autorisationfile").style.display = "none"),
  setInterval(showautori, 10);
var interval = setInterval(showfileupload, 10);
function verifiertousleschams() {
  var e = document.getElementById("email").value,
    t = document.getElementById("cin").value,
    i = document.getElementById("tel").value,
    o = document.getElementById("Adress").value,
    n = document.getElementById("name").value,
    l = document.getElementById("prenom").value,
    r = document.getElementById("namear").value,
    s = document.getElementById("prenomar").value,
    a = document.getElementById("datedenaissance").value,
    m = document.getElementById("lieudenaissance").value,
    d = document.getElementById("diplome").value,
    c = document.getElementById("anneedobtention").value,
    u = document.getElementById("mention").value,
    y = document.getElementById("etablissement").value,
    B = document.getElementById("Specialite").value;
  "" == e &&
  "" == t &&
  "" == i &&
  "" == o &&
  "" == n &&
  "" == l &&
  "" == r &&
  "" == s &&
  "" == a &&
  "" == m &&
  "" == d &&
  "" == c &&
  "" == u &&
  "" == y &&
  "" == B
    ? (document
        .getElementById("email")
        .setAttribute("class", "form-control is-invalid"),
      document
        .getElementById("cin")
        .setAttribute("class", "form-control is-invalid"),
      document
        .getElementById("tel")
        .setAttribute("class", "form-control is-invalid"),
      document
        .getElementById("Adress")
        .setAttribute("class", "form-control is-invalid"),
      document
        .getElementById("name")
        .setAttribute("class", "form-control is-invalid"),
      document
        .getElementById("prenom")
        .setAttribute("class", "form-control is-invalid"),
      document
        .getElementById("namear")
        .setAttribute("class", "form-control is-invalid"),
      document
        .getElementById("prenomar")
        .setAttribute("class", "form-control is-invalid"),
      document
        .getElementById("datedenaissance")
        .setAttribute("class", "form-control is-invalid"),
      document
        .getElementById("lieudenaissance")
        .setAttribute("class", "form-control is-invalid"),
      document
        .getElementById("diplome")
        .setAttribute("class", "form-control is-invalid"),
      document
        .getElementById("anneedobtention")
        .setAttribute("class", "form-control is-invalid"),
      document
        .getElementById("mention")
        .setAttribute("class", "form-control is-invalid"),
      document
        .getElementById("etablissement")
        .setAttribute("class", "form-control is-invalid"),
      document
        .getElementById("Specialite")
        .setAttribute("class", "form-control is-invalid"),
      Swal.mixin({
        toast: !0,
        position: "top-end",
        showConfirmButton: !1,
        timer: 3e3,
      }),
      toastr.error("veuillez remplir tous les champs"))
    : "" == e
    ? (document
        .getElementById("email")
        .setAttribute("class", "form-control is-invalid"),
      Swal.mixin({
        toast: !0,
        position: "top-end",
        showConfirmButton: !1,
        timer: 3e3,
      }),
      toastr.error("Veuillez entrer votre E-mail"))
    : "" == t
    ? (document
        .getElementById("cin")
        .setAttribute("class", "form-control is-invalid"),
      Swal.mixin({
        toast: !0,
        position: "top-end",
        showConfirmButton: !1,
        timer: 3e3,
      }),
      toastr.error("Veuillez entrer votre Cin"))
    : "" == i
    ? (document
        .getElementById("email")
        .setAttribute("class", "form-control is-invalid"),
      Swal.mixin({
        toast: !0,
        position: "top-end",
        showConfirmButton: !1,
        timer: 3e3,
      }),
      toastr.error("Veuillez entrer votre Tel"))
    : "" == o
    ? (document
        .getElementById("Adress")
        .setAttribute("class", "form-control is-invalid"),
      Swal.mixin({
        toast: !0,
        position: "top-end",
        showConfirmButton: !1,
        timer: 3e3,
      }),
      toastr.error("Veuillez entrer votre Adress"))
    : "" == n
    ? (document
        .getElementById("name")
        .setAttribute("class", "form-control is-invalid"),
      Swal.mixin({
        toast: !0,
        position: "top-end",
        showConfirmButton: !1,
        timer: 3e3,
      }),
      toastr.error("Veuillez entrer votre Nom"))
    : "" == l
    ? (document
        .getElementById("prenom")
        .setAttribute("class", "form-control is-invalid"),
      Swal.mixin({
        toast: !0,
        position: "top-end",
        showConfirmButton: !1,
        timer: 3e3,
      }),
      toastr.error("Veuillez entrer votre Pr\xe9nom"))
    : "" == r
    ? (document
        .getElementById("namear")
        .setAttribute("class", "form-control is-invalid"),
      Swal.mixin({
        toast: !0,
        position: "top-end",
        showConfirmButton: !1,
        timer: 3e3,
      }),
      toastr.error("Veuillez entrer votre Nom en arabe"))
    : "" == s
    ? (document
        .getElementById("prenomar")
        .setAttribute("class", "form-control is-invalid"),
      Swal.mixin({
        toast: !0,
        position: "top-end",
        showConfirmButton: !1,
        timer: 3e3,
      }),
      toastr.error("Veuillez entrer votre pr\xe9nom en arabe"))
    : "" == m
    ? (document
        .getElementById("lieudenaissance")
        .setAttribute("class", "form-control is-invalid"),
      Swal.mixin({
        toast: !0,
        position: "top-end",
        showConfirmButton: !1,
        timer: 3e3,
      }),
      toastr.error("Veuillez entrer votre Lieu de Naissance"))
    : "" == d
    ? (document
        .getElementById("diplome")
        .setAttribute("class", "form-control is-invalid"),
      Swal.mixin({
        toast: !0,
        position: "top-end",
        showConfirmButton: !1,
        timer: 3e3,
      }),
      toastr.error("Veuillez entrer votre Diplome"))
    : "" == u
    ? (document
        .getElementById("mention")
        .setAttribute("class", "form-control is-invalid"),
      Swal.mixin({
        toast: !0,
        position: "top-end",
        showConfirmButton: !1,
        timer: 3e3,
      }),
      toastr.error("Veuillez entrer votre mention"))
    : "" == y
    ? (document
        .getElementById("etablissement")
        .setAttribute("class", "form-control is-invalid"),
      Swal.mixin({
        toast: !0,
        position: "top-end",
        showConfirmButton: !1,
        timer: 3e3,
      }),
      toastr.error("Veuillez remplir l'\xe9tablissement "))
    : "" == B
    ? (document
        .getElementById("Specialite")
        .setAttribute("class", "form-control is-invalid"),
      Swal.mixin({
        toast: !0,
        position: "top-end",
        showConfirmButton: !1,
        timer: 3e3,
      }),
      toastr.error("Veuillez remplir la Specialite "))
    : (document
        .getElementById("email")
        .setAttribute("class", "form-control is-valid"),
      document
        .getElementById("cin")
        .setAttribute("class", "form-control is-valid"),
      document
        .getElementById("tel")
        .setAttribute("class", "form-control is-valid"),
      document
        .getElementById("Adress")
        .setAttribute("class", "form-control is-valid"),
      document
        .getElementById("name")
        .setAttribute("class", "form-control is-valid"),
      document
        .getElementById("prenom")
        .setAttribute("class", "form-control is-valid"),
      document
        .getElementById("namear")
        .setAttribute("class", "form-control is-valid"),
      document
        .getElementById("prenomar")
        .setAttribute("class", "form-control is-valid"),
      document
        .getElementById("datedenaissance")
        .setAttribute("class", "form-control is-valid"),
      document
        .getElementById("lieudenaissance")
        .setAttribute("class", "form-control is-valid"),
      document
        .getElementById("diplome")
        .setAttribute("class", "form-control is-valid"),
      document
        .getElementById("anneedobtention")
        .setAttribute("class", "form-control is-valid"),
      document
        .getElementById("mention")
        .setAttribute("class", "form-control is-valid"),
      document
        .getElementById("etablissement")
        .setAttribute("class", "form-control is-valid"),
      document
        .getElementById("Specialite")
        .setAttribute("class", "form-control is-valid"));
}
