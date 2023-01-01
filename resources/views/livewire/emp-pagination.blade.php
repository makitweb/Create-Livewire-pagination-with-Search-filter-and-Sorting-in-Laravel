<div>
    <div class="container">
        <div class="row mt-5">
            <div class="col-md-12">
                
                <!-- Search box -->
                <input type="text" class="form-control" placeholder="Search Name or city" style="width: 250px;" wire:model="searchTerm">

                <!-- Paginated records -->
                <table class="table">
                    <thead>
                        <tr>
                            <th class="sort" wire:click="sortOrder('emp_name')">Name {!! $sortLink !!}</th>
                            <th class="sort" wire:click="sortOrder('email')">Email {!! $sortLink !!}</th>
                            <th class="sort" wire:click="sortOrder('gender')">Gender {!! $sortLink !!}</th>
                            <th class="sort" wire:click="sortOrder('city')">City {!! $sortLink !!}</th>
                            <th>Status</th>
                        </tr>
                    </thead>
                    <tbody>
                        @if($employees->count())
                            @foreach($employees as $employee)
                                <tr>
                                    <td>{{ $employee->emp_name }}</td>
                                    <td>{{ $employee->email }}</td>
                                    <td>{{ $employee->gender }}</td>
                                    <td>{{ $employee->city }}</td>
                                    <td>{{ $employee->status }}</td>
                                </tr>
                            @endforeach    
                        @else
                            <tr>
                                <td colspan="5">No record found</td>
                            </tr>
                        @endif
                    </tbody>
                </table>

                <!-- Pagination navigation links -->
                {{ $employees->links() }}
            </div>
        </div>
    </div>
</div>
