$(function() {

  $("#logo_file").change(function() {
    if (this.files) {
      $("#image-preview00").attr("src", this.files[0].getAsDataURL());
    } else {
      $("#image-preview00").attr("src", $("#logo_file").val());
    }
  });

  $("#image00").change(function() {
    if (this.files) {
      $("#image-preview00").attr("src", this.files[0].getAsDataURL());
    } else {
      $("#image-preview00").attr("src", $("#image00").val());
    }
  });

  $("#image01").change(function() {
    if (this.files) {
      $("#image-preview01").attr("src", this.files[0].getAsDataURL());
    } else {
      $("#image-preview01").attr("src", $("#image01").val());
    }
  });

  $("#image02").change(function() {
    if (this.files) {
      $("#image-preview02").attr("src", this.files[0].getAsDataURL());
    } else {
      $("#image-preview02").attr("src", $("#image02").val());
    }
  });

  $("#image03").change(function() {
    if (this.files) {
      $("#image-preview03").attr("src", this.files[0].getAsDataURL());
    } else {
      $("#image-preview03").attr("src", $("#image03").val());
    }
  });

  $("#image04").change(function() {
    if (this.files) {
      $("#image-preview04").attr("src", this.files[0].getAsDataURL());
    } else {
      $("#image-preview04").attr("src", $("#image04").val());
    }
  });

  $("#image05").change(function() {
    if (this.files) {
      $("#image-preview05").attr("src", this.files[0].getAsDataURL());
    } else {
      $("#image-preview05").attr("src", $("#image05").val());
    }
  });

  $("#image06").change(function() {
    if (this.files) {
      $("#image-preview06").attr("src", this.files[0].getAsDataURL());
    } else {
      $("#image-preview06").attr("src", $("#image06").val());
    }
  });

  $("#image07").change(function() {
    if (this.files) {
      $("#image-preview07").attr("src", this.files[0].getAsDataURL());
    } else {
      $("#image-preview07").attr("src", $("#image07").val());
    }
  });

  $("#image08").change(function() {
    if (this.files) {
      $("#image-preview08").attr("src", this.files[0].getAsDataURL());
    } else {
      $("#image-preview08").attr("src", $("#image08").val());
    }
  });

  $("#image09").change(function() {
    if (this.files) {
      $("#image-preview09").attr("src", this.files[0].getAsDataURL());
    } else {
      $("#image-preview09").attr("src", $("#image09").val());
    }
  });

  $("#image10").change(function() {
    if (this.files) {
      $("#image-preview10").attr("src", this.files[0].getAsDataURL());
    } else {
      $("#image-preview10").attr("src", $("#image10").val());
    }
  });

  $("#image11").change(function() {
    if (this.files) {
      $("#image-preview11").attr("src", this.files[0].getAsDataURL());
    } else {
      $("#image-preview11").attr("src", $("#image11").val());
    }
  });

  $("#image12").change(function() {
    if (this.files) {
      $("#image-preview12").attr("src", this.files[0].getAsDataURL());
    } else {
      $("#image-preview12").attr("src", $("#image12").val());
    }
  });

  $("#p_photo").change(function() {
    if (this.files) {
      $("#image-preview99").attr("src", this.files[0].getAsDataURL());
    } else {
      $("#image-preview99").attr("src", $("#p_photo").val());
    }
  });
});