<x-admin.layouts>
    <div class="card">
        <div class="card-body">
            <div class="accordion" id="accordionExample">
                <div class="accordion-item">
                    <h2 class="accordion-header">
                        <button class="accordion-button" type="button" data-bs-toggle="collapse"
                            data-bs-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                            About us section
                        </button>
                    </h2>
                    <div id="collapseOne" class="accordion-collapse collapse show" data-bs-parent="#accordionExample">
                        <div class="accordion-body">

                            <div class="">

                                <form action="" class="mt-5 formValidation">
                                    <div class="row gy-4">
                                        <div class="col-12">

                                            <div>
                                                <label for="">Paragraph 1</label>
                                                <textarea id="jodit-editor-id" class="editor1"></textarea>
                                                <p id="jodit-editor-id-error" style="color: red; display: none;"></p>
                                            </div>
                                        </div>
                                        <div class="col-12">

                                            <div>
                                                <label for="">Paragraph 2</label>
                                                <textarea class="editor2 noVal"></textarea>
                                                <p class="text-danger"></p>
                                            </div>
                                        </div>
                                        <div class="col-12">

                                            <div>
                                                <label for="">Paragraph 3</label>
                                                <textarea class="editor3 noVal"></textarea>
                                                <p class="text-danger"></p>
                                            </div>
                                        </div>

                                        <div class="col-12">
                                            <button type="submit" class="btn btn-primary">Save</button>
                                        </div>
                                    </div>
                                </form>
                            </div>

                        </div>
                    </div>
                </div>
                <div class="accordion-item">
                    <h2 class="accordion-header">
                        <button class="accordion-button" type="button" data-bs-toggle="collapse"
                            data-bs-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                            Our mission and Our vision
                        </button>
                    </h2>
                    <div id="collapseTwo" class="accordion-collapse collapse" data-bs-parent="#accordionExample">
                        <div class="accordion-body">

                            <div class="">

                                <form action="" class="mt-5 formValidation">
                                    <div class="row gy-4">
                                        <div class="col-12">
                                            <div>
                                                <label for="">Blue Heading</label>
                                                <input type="text" class="form-control">
                                                <p class="text-danger"></p>
                                            </div>

                                        </div>
                                        <div class="col-12">
                                            <div>
                                                <label for="">Green Heading</label>
                                                <input type="text" class="form-control">
                                                <p class="text-danger"></p>
                                            </div>

                                        </div>
                                        <div class="col-12">
                                            <div>
                                                <label for="">Paragraph 1</label>
                                                <textarea class="editor4 noVal"></textarea>
                                                <p class="text-danger"></p>
                                            </div>

                                        </div>
                                        <div class="col-12">
                                            <div>
                                                <label for="">Paragraph 1</label>
                                                <textarea class="editor5 noVal"></textarea>
                                                <p class="text-danger"></p>
                                            </div>

                                        </div>


                                        <div class="col-12">
                                            <button type="submit" class="btn btn-primary">Save</button>
                                        </div>
                                    </div>
                                </form>
                            </div>

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <script>
        $(document).ready(function() {

            const editors = [
                Jodit.make('.editor1'),
                Jodit.make('.editor2'),
                Jodit.make('.editor3'),
                Jodit.make('.editor4'),
                Jodit.make('.editor5')
            ];



            $(".formValidation").submit(function(event) {
                event.preventDefault();
                let isValid = true;

                $(this)
                    .find("input")
                    .each(function() {
                        let $inputField = $(this);
                        let $parentDiv = $inputField.closest('div');
                        let $errorMessage = $parentDiv.find('p');
                        let labelText = $parentDiv.find('label').text();

                        if ($inputField.hasClass("noVal")) {
                            $inputField.removeClass("is-invalid");
                            return;
                        }

                        // Check for file input

                        if ($inputField.val().trim() === "") {
                            $inputField.addClass("is-invalid");
                            $errorMessage.text(labelText + " is required").css('display', 'block');
                            isValid = false;
                        } else {
                            $inputField.removeClass("is-invalid");
                            $errorMessage.text('').css('display', 'none');
                        }

                    });

                // Validation for each Jodit editor
                editors.forEach((editor, index) => {
                    const editorContent = $(`.editor${index + 1}`).val();
                    const strippedContent = editorContent.replace(/<\/?[^>]+(>|$)/g, "").trim();

                    if (!strippedContent) {
                        $(`.editor${index + 1}`).addClass("is-invalid");
                        $(`.editor${index + 1}-error`).text("Content is required").css('display',
                            'block');
                        isValid = false;
                    } else {
                        $(`.editor${index + 1}`).removeClass("is-invalid");
                        $(`.editor${index + 1}-error`).text('').css('display', 'none');
                    }
                });

                // If the form passes all validations, submit it
                if (isValid) {
                    this.submit();
                }
            });

            $(".formValidation .phoneVal").keydown(function(event) {
                const keyPressed = event.key;
                if (keyPressed === "+" || keyPressed === "-" || keyPressed === "e" || keyPressed === ".") {
                    event.preventDefault();
                }
            });

        });
    </script>
</x-admin.layouts>
