import {
    PaginationGap,
    PaginationList,
    PaginationNext,
    PaginationPage,
    PaginationPrevious
} from "@/Components/catalyst/pagination.jsx";

const Pagination = ({current_page, total_pages, href}) => {
    return (
        <>
            <Pagination>
                <PaginationPrevious href={`${href}?page=${current_page - 1}`}/>
                <PaginationList>
                    {(current_page < 5) && (
                        <>
                            {(current_page === 1 || current_page === 2 ? [1, 2, 3] : current_page === 3 ? [1, 2, 3, 4] : current_page === 4 ? [1, 2, 3, 4, 5] : []).map((num) => (
                                <PaginationPage href={`${href}?page=${num}`} current={current_page === num}>{num}</PaginationPage>
                            ))}
                        </>
                    )}
                    {(current_page >= 5 ) && (
                        <>
                            <PaginationPage href={`${href}?page=1`}>1</PaginationPage>
                            <PaginationGap/>
                        </>
                    )}
                    {(current_page >= 5 && (current_page < (total_pages - 3))) && (
                        <>
                            {[current_page - 1, current_page, ...(current_page < total_pages ? [current_page + 1] : [])].map((num) => (
                                <PaginationPage href={`${href}?page=${num}`} current={current_page === num}>{num}</PaginationPage>
                            ))}
                        </>
                    )}
                    {(current_page < (total_pages - 3)) && (
                        <>
                            <PaginationGap/>
                            <PaginationPage href={`${href}?page=${total_pages}`}>{total_pages}</PaginationPage>
                        </>
                    )}
                    {(current_page >= (total_pages - 3)) && (
                        <>
                            {(current_page === total_pages || current_page === (total_pages - 1) ? [total_pages - 2, total_pages - 1, total_pages] : current_page === (total_pages - 2) ? [total_pages - 3, total_pages - 2, total_pages - 1, total_pages] : current_page === (total_pages - 3) ? [total_pages - 4, total_pages - 3, total_pages - 2, total_pages - 1, total_pages] : []).map((num) => (
                                <PaginationPage href={`${href}?page=${num}`} current={current_page === num}>{num}</PaginationPage>
                            ))}
                        </>
                    )}
                </PaginationList>
                <PaginationNext href={`${href}?page=${current_page + 1}`}/>
            </Pagination>
        </>
    )
}
export default  Pagination
