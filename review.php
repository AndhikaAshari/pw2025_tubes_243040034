<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.6/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-4Q6Gf2aSP4eDXB8Miphtr37CMZZQ5oXLH2yaXMJ2w8e2ZtHTl7GptT4jmndRuHDT" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="style.css">

    <style>
        .containerrr {
            max-width: 768px;
            margin: 50px auto;
            background-color: #fff;
            border-radius: 0.5rem;
            box-shadow: 0 1px 3px rgb(0 0 0 / 0.1);
            padding: 16px;
            box-sizing: border-box;
        }

        .alert {
            padding: 12px;
            margin: 10px auto;
            border-radius: 5px;
            text-align: center;
            font-weight: bold;
            max-width: 600px;
        }

        .alert-success {
            background-color: #d1fae5;
            color: #065f46;
        }

        .alert-danger {
            background-color: #fee2e2;
            color: #991b1b;
        }

        .header {
            display: flex;
            justify-content: space-between;
            align-items: center;
            margin-bottom: 24px;
        }

        .header h2 {
            font-weight: 600;
            font-size: 18px;
            color: #374151;
            margin: 0;
        }

        .btn-back {
            background-color: #ef4444;
            color: white;
            font-weight: 600;
            padding: 6px 12px;
            border: none;
            border-radius: 0.375rem;
            cursor: pointer;
            box-shadow: 0 1px 2px rgb(0 0 0 / 0.2);
            font-size: 14px;
        }

        form {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(280px, 1fr));
            gap: 16px 24px;
            align-items: start;
        }

        label {
            display: block;
            font-weight: 600;
            margin-bottom: 4px;
            color: #4b5563;
            font-size: 14px;
        }

        input[type="text"],
        select,
        textarea {
            width: 100%;
            padding: 6px 8px;
            border: 1px solid #d1d5db;
            border-radius: 0.375rem;
            font-size: 14px;
            box-sizing: border-box;
            font-family: inherit;
            color: #111827;
        }

        textarea {
            resize: vertical;
            min-height: 100px;
        }

        .btn-update-containerrr {
            grid-column: 2 / 3;
            display: flex;
            justify-content: flex-end;
            align-items: center;
        }

        .btn-update {
            background-color: #db2777;
            color: white;
            font-weight: 600;
            padding: 6px 20px;
            border: none;
            border-radius: 0.375rem;
            cursor: pointer;
            box-shadow: 0 1px 2px rgb(0 0 0 / 0.2);
            font-size: 14px;
        }

        @media (max-width: 640px) {
            .btn-update-containerrr {
                grid-column: 1 / 2;
                justify-content: flex-start;
            }
        }
    </style>
</head>

<body>
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
        <a class="navbar-brand" href="user.php">BACK</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavAltMarkup"
            aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
            <div class="navbar-nav">
                <a class="nav-item nav-link" href="review.php">Review</a>
                <a class="nav-item nav-link" href="watchlist.php">Watchlist</a>
            </div>
        </div>
    </nav>

    <?php if (isset($_GET['status'])): ?>
        <div class="alert alert-<?php echo $_GET['status'] === 'success' ? 'success' : 'danger'; ?> text-center" role="alert">
            <?php echo $_GET['status'] === 'success' ? '✅ Review berhasil dikirim!' : '❌ Gagal mengirim review.'; ?>
        </div>
    <?php endif; ?>

    <div class="containerrr">
        <div class="header">
            <h2>Add Review</h2>
            <button type="button" class="btn-back"><a href="watchlist.php">Add Your Watchlist</a></button>
        </div>
        <form action="Function.php" method="POST">
            <div>
                <label for="title">Film Title</label>
                <input id="title" name="title" type="text" placeholder="Enter film title" />
            </div>
            <div>
                <label for="category">Category</label>
                <select id="category" name="category">
                    <option>Action</option>
                    <option>Thriller</option>
                    <option>Animation</option>
                    <option>Drakor</option>
                    <option>Horror</option>
                    <option>Romance</option>
                </select>
            </div>
            <div>
                <label for="director">Director</label>
                <input id="director" name="director" type="text" placeholder="Enter director name" />
            </div>
            <div>
                <label for="year">Release Year</label>
                <input id="year" name="year" type="text" placeholder="Enter release year" />
            </div>
            <div>
                <label for="rating">Rating</label>
                <select id="rating" name="rating">
                    <option>-- Select Rating --</option>
                    <option>5 - Excellent</option>
                    <option>4 - Good</option>
                    <option>3 - Average</option>
                    <option>2 - Poor</option>
                    <option>1 - Terrible</option>
                </select>
            </div>
            <div>
                <label for="message">Message</label>
                <textarea id="message" name="message" placeholder="Write your message here..."></textarea>
            </div>
            <div></div>
            <div class="btn-update-containerrr">
                <button type="submit" class="btn-update">UPDATE</button>
            </div>
        </form>

    </div>
</body>

</html>