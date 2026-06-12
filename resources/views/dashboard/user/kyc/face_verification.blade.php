<!DOCTYPE html>
<html>
<body>

<div class="card-body transaction-history pt-0 mt-3">
                      <h2>Face Verification</h2>

<video id="video" autoplay playsinline></video>
<button id="capture">Capture Face</button>

<canvas id="canvas" style="display:none;"></canvas>

<form method="POST" action="#">
    @csrf
    <input type="hidden" name="image" id="image">
    <button type="submit">Verify</button>
</form>

</body>
</html>



<script>
const video = document.getElementById('video');

navigator.mediaDevices.getUserMedia({ video: true })
  .then(stream => video.srcObject = stream);

document.getElementById('capture').onclick = () => {
    const canvas = document.getElementById('canvas');
    canvas.width = video.videoWidth;
    canvas.height = video.videoHeight;

    canvas.getContext('2d').drawImage(video, 0, 0);
    document.getElementById('image').value =
        canvas.toDataURL('image/jpeg');
};
</script>

                 
