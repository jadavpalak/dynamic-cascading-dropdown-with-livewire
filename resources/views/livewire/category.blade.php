<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Category</div>

                <div class="card-body">
                        <div class="row">
                            <div class="form-group">
                                <label for="sel1">Select Category:</label>
                                <select name="category" wire:model="category" class="form-control" id="sel1">
                                <option value=''>Choose A Category</option>
                                @foreach($categories as $category)
                                    <option value={{ $category->id }}>{{ $category->name }}</option>
                                @endforeach
                                </select>
                            </div>
                        </div>
                        <div class="row">
                            <div class="form-group">
                                <label for="sel1">Select Sub Category:</label>
                                <select name="subCategory" wire:model="subCategory" class="form-control {{ count($this->subcategories)==0 ? 'hidden' : '' }}" id="sel1">
                                <option value=''>Choose A Sub Category</option>
                                @foreach($this->subcategories as $cat)
                                    <option value={{ $cat->id }}>{{ $cat->name }}</option>
                                @endforeach
                                </select>
                            </div>
                        </div>
                </div>
            </div>
        </div>
    </div>
</div>
