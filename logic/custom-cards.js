

$('#childform').validate({
    rules: {
        name: {
            required: true,
            minlength: 2
          },
        email: {
            required: true,
            email: true
        },
        childname: {
            required: true,
            minlength: 2
          },
        childage: {
            number: true
        }
    }
});
