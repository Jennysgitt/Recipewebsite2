 <style>       
@import url('https://fonts.googleapis.com/css2?family=Josefin+Sans:ital,wght@0,100..700;1,100..700&display=swap');
        
        html{
        font-family: "Josefin Sans", sans-serif !important;
        font-style: normal;
        }
/* style for hover effect on the cards */
        .card-image:hover .overlay{
            border-radius: 10px;
            opacity: 1;
            cursor: pointer;
            text-decoration: underline white;
        }

        .video-overlay{
            position: absolute;
            top: 50%;
            left: 50%;
            transform: translate(-50%, -50%);
            text-align: center;
        } 

        .overlay{
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            background-color: rgba(0, 0, 0, 0.8);
            opacity: 0;
            transition: opacity 0.5s ease;
            display: flex;
            justify-content: center;
            align-items: center;
        }

        .overlay-text{
            color: white;
            font-size: 2px;
            text-align: center;
        }

        .rounded-edges{
            border-radius: 10px !important;
        }

        .card-image:hover .overlay{
            border-radius: 10px;
        }

        .gradient-bg{
            background: linear-gradient(to bottom, #ffffff, #e65100);
        }

        .btn {
            display: inline-flex;
            align-items: center;
            justify-content: center;
            border-radius: 12px;
            padding: 25px;
            background-color: #E25822;
            color: white;
            transition: transform 0.3s ease; /* Smooth transition */
        }

        .btn:hover:hover {
            transform: scale(1.1); /* Slightly scale the button */
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.2); /* Add a shadow */
        }
    </style>