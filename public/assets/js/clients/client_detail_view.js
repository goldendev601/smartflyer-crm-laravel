function fallbackCopyTextToClipboard(text) {
    var textArea = document.createElement("textarea");
    textArea.value = text;

    // Avoid scrolling to bottom
    textArea.style.top = "0";
    textArea.style.left = "0";
    textArea.style.position = "fixed";

    document.body.appendChild(textArea);
    textArea.focus();
    textArea.select();

    try {
        var successful = document.execCommand("copy");
        var msg = successful ? "successful" : "unsuccessful";
        console.log("Fallback: Copying text command was " + msg);
    } catch (err) {
        console.error("Fallback: Oops, unable to copy", err);
    }

    document.body.removeChild(textArea);
}

function copyTextToClipboard(text) {
    if (!navigator.clipboard) {
        fallbackCopyTextToClipboard(text);
        return toastr.success("Copied to clipboard!", "Success");
    }
    navigator.clipboard.writeText(text).then(
        function () {
            toastr.success("Copied to clipboard!", "Success");
        },
        function (err) {
            // console.error('Async: Could not copy text: ', err);
        }
    );
}

function showError(response)
{
    $.each(response.responseJSON.errors, function(index, value) {
        $('.error_'+index).html(value);
    });
}
