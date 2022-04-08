<!DOCTYPE html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="icon" type="image/x-icon" href="favicon.ico">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <title>PHPMailer Demo</title>
</head>

<body>
    <div class="row d-flex justify-content-center">
        <div class="col-lg-6 p-5">
            <h1 class="pb-3">Welcome to PHPMailer!</h1>
            <form action="" method="POST">
                <div class="form-floating mb-3">
                    <input type="email" name="to" class="form-control" id="input-to" required value="<?= $email_to; ?>">
                    <label for="input-to">To</label>
                </div>
                <div class="form-floating mb-3">
                    <input type="email" name="from" class="form-control" id="input-from" required value="<?= $email_from; ?>">
                    <label for="input-from">From</label>
                </div>
                <div class="form-floating mb-3">
                    <input type="text" name="subject" class="form-control" id="input-subject" required value="<?= $email_subject; ?>">
                    <label for="input-subject">Subject</label>
                </div>
                <div class="form-floating">
                    <textarea class="form-control" name="message" style="height: 150px" placeholder="Leave a comment here" id="input-body" required><?= $email_body; ?></textarea>
                    <label for="input-body">Email body</label>
                </div>

                <div class="row pt-3">
                    <div class="col">
                        <div class="form-check">
                            <input class="form-check-input" type="radio" name="flexRadioDefault" id="flexRadioDefault1" checked>
                            <label class="form-check-label" for="flexRadioDefault1">
                                Use Gmail SMTP
                            </label>
                        </div>
                    </div>
                    <div class="col">
                        <div class="form-check">
                            <input class="form-check-input" type="radio" name="flexRadioDefault" id="flexRadioDefault2">
                            <label class="form-check-label" for="flexRadioDefault2">
                                Use Regular SMTP
                            </label>
                        </div>
                    </div>
                </div>

                <br>
                <button type="submit" name="submit" class="btn btn-primary btn-lg">Send mail</button>
            </form>
        </div>
        <div class="col-lg-6 pt-5">

            <small>Server Status :
                <?php if ($server === 'localhost') { ?>
                    <span class="text-warning">Localhost</span>
                <?php } else { ?>
                    <span class="text-success">Online</span>
                <?php } ?>
            </small>
            <br>
            <br>
            <p>Request</p>
            <div class="card mb-3" style="min-height: 220px;">
                <div class="card-body text-small">
                    <?php echo $content; ?>
                </div>
            </div>
            <p>Response</p>
            <div class="card" style="min-height: 220px;">
                <div class="card-body">
                </div>
            </div>
        </div>
    </div>

    <?php if (isset($_POST['submit'])) { ?>
        <div class="position-fixed top-0 end-0 p-3" style="z-index: 11">
            <div id="liveToast" class="toast" role="alert" aria-live="assertive" aria-atomic="true">
                <div class="toast-header">
                    <small>Just now</small>
                    <button type="button" class="btn-close" data-bs-dismiss="toast" aria-label="Close"></button>
                </div>
                <div class="toast-body">
                    <?php echo $response; ?>
                </div>
            </div>
        </div>
    <?php } ?>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
    <script>
        var theToast = document.getElementById('liveToast')
        if (theToast) {
            var toast = new bootstrap.Toast(theToast)
            toast.show()
        }
    </script>
</body>

</html>